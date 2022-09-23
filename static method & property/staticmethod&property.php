<?php

class Student{
    protected static $name=[];
    public static function name($nstudent){
        self::$name=array_push(self::$name,$nstudent);
    }

    public static function getSname(){
        return self::$name;
    }
}

Student::name("jobayed");

echo(Student::getSname());