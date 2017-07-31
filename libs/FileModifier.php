<?php

/**
 * Class executing, reading and replacing the contents in a file
 */

class FileModifier
{
    private $filePath;
    private $file;

    /**
     *Construct  assigning a value
     * for $filePath and set filePath and open file
     */
    public function __construct($fPath)
    {
        if (file_exists($fPath))
        {
            $this->filePath = $fPath;
            $this->file = file($this->filePath);
        }
    }

    /**
     * function get file path
     * @return string filePath
     */
    public function getFilePath()
    {
        if (!empty($this->filePath))
        {
            return $this->filePath;
        }
        else
        {
            return FILE_MISSING;
        }
    }

    /**
     * Method of output file by row
     */
    public function getFileByRow()
    {
        $text = file_get_contents($this->filePath);
        return nl2br($text);
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
            foreach ($this->file as $key => $strContent)
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
            foreach ($this->file as $key => $strContent)
            {
                if ($key == $numStr)
                {
                    if($numSym  <= strlen($strContent))
                    {
                        switch ($strContent{$numSym})
                        {
                            case "\n":
                                return EOL_N;
                                break;
                            case " ":
                                return SPACE;
                                break;
                            case "\t":
                                return EOL_TAB;
                            case "\r":
                                return EOL_R;
                                break;
                        }
                    }
                    else
                    {
                        return SYMBOL_MISSING;
                    }
                    return $strContent{$numSym};
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
     * Save data in file
     * @param array $file
     * @return bool
     */
    public function saveFile($file)
    {
        if(is_array($file))
        {
            file_put_contents($this->filePath, $file);
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Replace line on line in $newStr
     * @param $numStr int
     * @param $newStr int
     * @return array|bool|string
     *
     */
    public function strReplace($numStr, $newStr)
    {
        if(isset($this->file [(int)$numStr]))
        {
            $this->file [$numStr] = $newStr."\r\n";
            $this->saveFile($this->file );
            return true;
        }
        else
        {
            return ROW_MISSING;
        }
    }

    /**
     * Replace symbol on $newSymbol
     * @param $numStr int
     * @param $numSymbol int
     * @param $newSymbol string
     * @return bool|string
     */
    public function symbolReplace($numStr, $numSymbol, $newSymbol)
    {
        if(isset($this->file[(int)$numStr]))
        {
            $this->file[$numStr]{(int)$numSymbol} = $newSymbol;
            $this->saveFile($this->file);
            return true;
        }
        else
        {
            return ROW_MISSING;
        }
    }
}
?>