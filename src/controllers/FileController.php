<?php

/*
 * Task runner, code generator and build tool for easier continuos integration
 *
 * @link      https://github.com/hiqdev/hidev
 * @package   hidev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\controllers;

use hidev\base\File;
use hidev\helpers\Helper;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * File controller.
 */
class FileController extends CollectionController
{
    /**
     * @var string specifies handler to be used
     */
    public $fileType;

    /**
     * @var array|File the file to be handled.
     */
    protected $_file;

    protected $_template;

    public function setTemplate($template)
    {
        $this->_template = $template;
    }

    public function getTemplate()
    {
        return Helper::file2template($this->_template ?: $this->id);
    }

    /**
     * Returns file object.
     * Instantiates it if necessary.
     *
     * @return File
     */
    public function getFile()
    {
        if (!is_object($this->_file)) {
            $this->_file = Yii::createObject(array_merge([
                'class'    => File::className(),
                'template' => $this->getTemplate(),
                'goal'     => $this,
                'path'     => $this->id,
            ], is_string($this->_file)
                ? ['path' => $this->_file]
                : (array) $this->_file
            ));
        }

        return $this->_file;
    }

    /**
     * Sets file with given info.
     *
     * @param mixed $info could be anything that is good for File::create
     */
    public function setFile($info)
    {
        $this->_file = $info;
    }

    public function getDirname()
    {
        return $this->getFile()->getDirname();
    }

    public function getPath()
    {
        return $this->getFile()->getPath();
    }

    public function exists()
    {
        return $this->getFile()->exists();
    }

    public function read()
    {
        return $this->getFile()->read();
    }

    public function readArray()
    {
        return $this->getFile()->readArray();
    }

    public function actionPerform($name = null, $path = null)
    {
        Yii::trace("Started: '$this->id'");
        return $this->runActions(['before', 'make', 'after']);
    }

    public function actionLoad()
    {
        $data = $this->getFile()->load() ?: [];
        if ($data) { /// TODO think what's better
        //  $this->setItems(ArrayHelper::merge($data, $this->toArray()));
            $this->setItems(ArrayHelper::merge($this->toArray(), $data));
        //  $this->setItems($data);
        }
    }

    public function actionSave()
    {
        $this->_items = Helper::uniqueConfig($this->_items);
        $this->getFile()->save($this);
        return 0;
    }
}
