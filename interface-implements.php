<?php

interface logger{
    public function log($message);
}


class FileLogger implements logger{
    private $filename;
    private $handle;

    public function __construct($filename,$mode='a'){
        $this->filename=$filename;
        $this->handle=fopen($filename,$mode);
    }

    public function log($message){
        $message=date("F j,Y , g:i a").":".$message."\n";

        fwrite($this->handle,$message);
    }

    public function __destruct(){
        fclose($this->handle);
    }
}

$fl=new FileLogger("new.txt");

$fl->log("Feel Well to did this interface Code better");

