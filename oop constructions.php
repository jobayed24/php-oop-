<?php




class MyOwn{
    
    function __construct( private $bacname,private $bacnumber){
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