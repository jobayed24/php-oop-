<?php

class Student{
    private $sname;

    protected static function nameEntry($newname){
       return $this->sname=$newname;
    }
}


class StudentOverview extends Student{
    public function getStudentName(){
        return parent->$sname;
    }
}


$so=new Stu