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

    /**
     * Get file content to array and search line given
     * @param $numStr
     * @return string
     */
    public function readFileStr($numStr)
    {
        if(is_int((int)$numStr))
        {
            $file = file($this->filePath);
            foreach ($file as $key => $strContent)
            {
                if ($key == $numStr)
                {
                    return $strContent;
                }
            }
            return ROW_MISSING;
        }
        else
        {
            return UNKNOWN_ARG;
        }
    }

    /**
     * Get file content to array and search line given
     * @param $numStr
     * @return string
     */
    public function readFileSymbol($numStr, $numSym)
    {
        if (is_int((int)$numStr) && is_int((int)$numSym))
        {
            $file = file($this->filePath);
            foreach ($file as $key => $strContent)
            {
                if ($key == $numStr)
                {
                    if ($numSym  <= strlen($strContent))
                    {
                        $symbol = substr($strContent, $numSym, 1);
                        if ($symbol == " "){
                            return SPACE;
                        }
                        return $symbol;
                    }

                }
            }
            return ROW_MISSING;
        }
        else
        {
            return UNKNOWN_ARG;
        }
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