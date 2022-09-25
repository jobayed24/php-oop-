<?php

class Model{
    protected const TABLE_NAME="";


   public static function all(){
    return "Select * From ".static::TABLE_NAME;
   }

}

class Roll extends Model{
    protected const TABLE_NAME='Roll';
}

class User extends Model{
    protected const TABLE_NAME='User';
}

$nroll=new Roll();

$us=new User();

echo $nroll->all()."\n";

echo $us->all();