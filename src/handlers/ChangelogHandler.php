<?php

/*
 * Automation tool mixed with code generator for easier continuos integration
 *
 * @link      https://github.com/hiqdev/hidev
 * @package   hidev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\handlers;

/**
 * Handler for CHANGELOG.md file.
 */
class ChangelogHandler extends BaseHandler
{
    public $releaseNotes = [];

    public function parsePath($text, $minimal = null)
    {
        /// do nothing
    }

    public function render($data)
    {
        $res = CommitsHandler::renderHeader('changelog');

        foreach ($this->goal->takeGoal('commits')->getHistory() as $tag => $notes) {
            $tag = CommitsHandler::arrayPop($notes, 'tag') ?: $tag;
            CommitsHandler::arrayPop($notes, '');
            $res .= CommitsHandler::renderTag($tag);
            $this->releaseNotes[$tag] = '';
            foreach ($notes as $note => $cs) {
                $note = CommitsHandler::arrayPop($cs, 'note');
                $res .= CommitsHandler::renderNote($note) ?: $note;
                $this->releaseNotes[$tag] .= CommitsHandler::renderNote($note) ?: $note;
            }
        }

        return $res;
    }
}
