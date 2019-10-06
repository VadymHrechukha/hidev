<?php

namespace hidev\components;

class Systemd
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function up(string $config = null)
    {
        if ($config) {
            $this->setup($config);
        }
        $this->enable();
        $this->start();
        $this->status();
    }

    public function down()
    {
        $this->stop();
        $this->disable();
    }

    public function checkConfig()
    {
        $path = $this->getPath();
        if (!file_exists($path)) {
            throw new \Exception("no config: $path");
        }
    }

    private $path;

    public function getPath()
    {
        if ($this->path === null) {
            $path = "/etc/systemd/system/{$this->name}.service";
        }

        return $path;
    }

    public function setup(string $config)
    {
        $name = $this->name;
        $temp = "/tmp/$name.service";
        $dest = $this->getPath();
        file_put_contents($temp, $config);
        sys::passthru("sudo cp $temp $dest");
    }

    public function enable()
    {
        $this->systemctl('enable');
    }

    public function disable()
    {
        $this->systemctl('disable');
    }

    public function stop()
    {
        $this->systemctl('stop');
    }

    public function start()
    {
        $this->systemctl('start');
    }

    public function restart()
    {
        $this->systemctl('restart');
    }

    public function status()
    {
        $this->systemctl('status');
    }

    public function systemctl(string $command)
    {
        $this->checkConfig();
        $sudo = $command === 'status' ? '' : 'sudo';
        sys::passthru("$sudo systemctl $command {$this->name}");
    }
}
