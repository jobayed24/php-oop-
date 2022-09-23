<?php

trait BankAccount{
    protected $informtion;
    protected $filename;
    protected $handle;
  function __construct($filename,$handle){
    $this->filename=$filename;
    $this->handle=$handle;
  }

 abstract public function date($date);
}

trait Withdraw{
  private $withdraw;

  function withDraw($withdraw){
    return $this->withDraw=$withdraw;
  }
}

class CustomerTrack{
  use BankAccount,Withdraw;
  public function date($date){
    echo "he is come here ".$date;
  }


}

$ct=new CustomerTrack("rasel",'tanvir');
echo $ct->withDraw("New Customer has added new files");