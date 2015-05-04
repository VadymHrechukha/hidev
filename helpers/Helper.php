<?php

/*
 * HiDev
 *
 * @link      https://hiqdev.com/hidev
 * @package   hidev
 * @license   BSD 3-clause
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\hidev\helpers;

use Yii;
use yii\helpers\Inflector;

/**
 * Hidev Helper.
 */
class Helper
{
    public static function bad2sep($str, $separator = '-')
    {
        return preg_replace('/[^\w-]/', $separator, $str);
    }

    public static function id2camel($id, $separator = '-')
    {
        return Inflector::id2camel(strtolower(self::bad2sep($id,$separator)), $separator);
    }

    public static function file2template($file, $separator = '-')
    {
        return self::bad2sep(trim($file,'.'), $separator);
    }

    public static function csplit($input, $delimiter = ',')
    {
        if (is_array($input)) {
            return $input;
        }
        $res = explode($delimiter, $input);

        return array_values(array_filter(array_map('trim', $res)));
    }

    public static function ksplit($input, $delimiter = ',')
    {
        if (is_array($input)) {
            return $input;
        }
        $res = self::csplit($input, $delimiter);

        return array_combine($res, $res);
    }

}
