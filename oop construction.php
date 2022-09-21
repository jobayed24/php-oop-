<?php

/// decalare private variable and access those property after ini
/// by public function
class MyOwn{
    private $bacname;
    private $bacnumber;
    function __construct($bacname,$bacnumber){
        $this->bacname=$bacname;
        $this->bacnumber=$bacnumber;
    }

    function getValue(){
        echo $this->bacname."\n";
        echo $this->bacnumber;
    }
}

$myown= new MyOwn("JOBAYED","OEY094844");

$myown->getValue();