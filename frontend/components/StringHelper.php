<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.10.2019
 * Time: 19:54
 */

namespace frontend\components;


class StringHelper
{
    public static function getShort($string)
    {
        return substr($string, 0, 200) . ' ..';
    }
}