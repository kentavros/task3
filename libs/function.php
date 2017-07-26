<?php

/**
 * Function autoload classis
 * @param $className
 *
 */
function __autoload($className)
{
    $path = $className.".php";
    if(file_exists($path)){
        require_once($path);
    } else {
        die ("Файл {$className}.php не найден.");
    }
}