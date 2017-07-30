<?php

/**
 * Class executing, reading and replacing the contents in a file
 */

class FileModifier
{

    private $filePath;
    private $descriptor;

    /**
     *Construct  assigning a value
     * for $filePath and set filePath and open file
     */
    public function __construct($fPath)
    {
        if (file_exists($fPath))
        {
            $this->filePath = $fPath;
            $this->descriptor = fopen($this->filePath, 'r+');
        }
        else
        {
            return FILE_MISSING;
        }
    }

    /**
     * function get file path
     * @return string filePath
     */
    public function getFilePath()
    {
        if(!empty($this->filePath))
        {
            return $this->filePath;
        }
        else
        {
            return FILE_MISSING;
        }
    }

    public function readFile()
    {
        
    }















    /**
     * In destructor close file
     */
    public function __destruct()
    {
        fclose($this->descriptor);
    }

}
?>