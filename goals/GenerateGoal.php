<?php

/*
 * HiDev - integrate your development
 *
 * @link      https://hidev.me/
 * @package   hidev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2015, HiQDev (https://hiqdev.com/)
 */

namespace hidev\goals;

/**
 * Generate goal to build files by template and params.
 */
class GenerateGoal extends TemplateGoal
{
    public static function template2file($template, $extension = '.php')
    {
        $a = pathinfo($template);
        return $a['dirname'] . '/' . $a['filename'] . $extension;
    }

    public function actionPerform($template, $file = null)
    {
        $this->template = $template;
        $this->file = $file ?: static::template2file($template);
        return parent::actionPerform();
    }

    public function actionOnce($template, $file = null)
    {
        $file = $file ?: static::template2file($template);
        if (file_exists($file)) {
            return;
        }
        return $this->actionPerform($template, $file);
    }

    public function actionMkdir($dir)
    {
        if (file_exists($dir)) {
            return;
        }
        mkdir($dir, 0777, true);
    }
}
