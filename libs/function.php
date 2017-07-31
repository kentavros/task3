<?php
/**
 * Autoload class function
 */
function __autoload($class)
{
    $path = "libs/{$class}.php";
    if (file_exists($path))
    {
        require_once ($path);
    }
    else
    {
        die ("File {$class} not found!");
    }
}

/**
 * Method of output file by row
 */
function FileByRow($filePath)
{
    $text = file_get_contents($filePath);
    return nl2br($text);
}

?>