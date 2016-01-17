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

/**
 * Controller for version bump.
 */
class BumpController extends AbstractController
{
    protected $_before = ['commits'];

    public $version;

    public function actionPerform($version = null)
    {
        $this->version = $version;
        return $this->runActions(['before', 'make', 'after']);
    }

    public function actionMake()
    {
        return $this->runRequests(['commits/bump', 'version/bump', 'CHANGELOG.md']);
    }

    public function actionCommit($version = null)
    {
        $version = $version ?: $this->version ?: $this->takeGoal('version')->version;
        $message = "version bump to $version";
        return $this->passthru('git', ['commit', '-am', $message]);
    }
}