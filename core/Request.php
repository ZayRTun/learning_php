<?php
/**
 * Created by PhpStorm.
 * User: zayt
 * Date: 9/18/2018
 * Time: 10:51 AM
 */

class Request
{
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}