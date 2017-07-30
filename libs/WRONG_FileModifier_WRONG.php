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
     * for $filePath and $descriptor
     */

    public function __construct($fPath)
    {
        if (($this->filePath = $fPath) && ($this->descriptor = fopen($this->filePath, 'r+')))
        {
            $this->filePath = $fPath;
            $this->descriptor = fopen($this->filePath, 'r+');
        }
        else
        {
            echo "Error path file or Error open file (rights)";
        }


    }

    /**
     * function get file path
     * @return mixed filePath
     */

    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * get one symbol from file (filePath)
     * @return string one symbol
     */
    public function getChar()
    {
        $char = fgetc($this->descriptor);
        if ($char === false)
        {
            //Resets the handle to the beginning
            rewind($this->descriptor);
        }
        return "$char";
    }

    /**
     * get one string from file (filePath)
     * @return string $str
     */
    public function getStr()
    {
        $str = fgets($this->descriptor);
        if ($str === false){
            //Resets the handle to the beginning
            rewind($this->descriptor);
        }
        return $str;
    }







    /**
     * In destructor close file
     */
    public function __destruct()
    {
        fclose($this->descriptor);
    }


}