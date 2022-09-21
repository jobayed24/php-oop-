<?php

interface  Logger{
        public function log($message);
}

class Filelogger implements Logger{
    private $handle,$logfile;

    function __construct($filename,$mode=a){
        $this->logfile=$filename;
        $this->handle=fopen($filename,$mode);
    }

        function log($message){
            $message=date('F j, Y, g:i a').":".$message."\n";
            fwrite($this->handle,$message);
        }

        function __destruct(){
            fclose($this->handle);
        }
}

$filelogger=new Filelogger('newness.txt','w');

$filelogger->log("Interface is awesome");