<?php


class Fruit
{
    public $color, $name;

    function setName($fname)
    {
        $this->name = $fname;
    }
    function getName()
    {
        return  $this->name;
    }

    function setColor($sColor)
    {
        $this->color = $sColor;
    }

    function getColor()
    {
        return $this->color;
    }
}


$inFruit= new Fruit;

$inFruit->setName("Banana");
$inFruit->setColor("yellow");


$inFruit2= new Fruit;

$inFruit2->setName("Mango");
$inFruit2->setColor("Green");

echo $inFruit2->getName();
echo $inFruit2->getColor();


