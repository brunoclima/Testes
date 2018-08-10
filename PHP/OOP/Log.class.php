<?php

class Log {
    public function Write ($strFileName, $strData) {
        if(!is_writable($strFileName)) {
            die("Change your CHMOD permissions to $strFileName!");
        } else {
            $handle = fopen($strFileName, 'a+');

            fwrite($handle, "$strData\n");
            fclose($handle);
        }
    }

    public function Read ($strFileName) {
        fopen($strFileName, 'r');

        return file_get_contents($strFileName);
    }
}
?>