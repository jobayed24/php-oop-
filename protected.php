<?php

class Customer
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	protected function format()
	{
		return strtoupper($this->name);
	}

	public function getName()
	{
		return $this->format();
	}
}

$newCs=new Customer("rasel");

echo $newCs->getName(); 