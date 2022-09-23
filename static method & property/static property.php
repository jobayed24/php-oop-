<?php

class Student{
    protected static $sname;

    function __construct($psname){
        self::$sname=$psname;
    }

    protected function getSname(){
        return  self::$sname;
    }
}


class StudentNotice extends Student{
    public function getSname(){
      return  parent::getSname();
    }
}

$sn=new StudentNotice("jobayed");

  echo $sn->getSname();