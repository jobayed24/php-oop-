<?php

abstract class SaySomething{
    abstract public function greetng();
}


class US extends SaySomething{
    public function greetng(){
        return "Hello";
    }
}

class French extends SaySomething{
    public function greetng(){
        return "Mew Pacho";
    }
}


class Germany extends SaySomething{
    public function greetng(){
        return "emalow";
    }
}


$greetingArrays=[new US,new French,new Germany];

foreach($greetingArrays as $singleGreeting){
   echo  $singleGreeting->greetng()."\n";
}