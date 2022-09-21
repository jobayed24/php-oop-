<?php

class MyClass{
    private $name;

    public function setName($name){
        if($name){
          $name=trim($name);
        }

        if(""==$name){
            return false;
        }

        $this->name=$name;
        
    }

    public function getName(){
        echo $this->name;
    }

}
$my= new MyClass();

$my->setName("   MY name is Jobayed  ");

$my->getName();

/// access private property in a class by public getter and setter method