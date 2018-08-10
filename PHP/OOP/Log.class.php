<?php

class Log
{
    public function Write ($strFileName, $strData)
    {
        if(!is_file($strFileName)) {
            fopen($strFileName, 'x+');
        } elseif(!is_writable($strFileName)) {
            die("Change your CHMOD permissions to $strFileName!");
        }
        
        $handle = fopen($strFileName, 'a+');

        fwrite($handle, "$strData\n");
        fclose($handle);
    }

    public function Read ($strFileName)
    {
        fopen($strFileName, 'r');
        return file_get_contents($strFileName);
    }
}
?>