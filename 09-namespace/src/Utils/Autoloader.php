<?php

namespace App\Utils;

class Autoloader
{
    public static function autoload()
    {
        spl_autoload_register(function ($className) {
            $path = str_replace('App', 'src', $className);
            $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
            include_once "$path.php";
        });
    }
}
