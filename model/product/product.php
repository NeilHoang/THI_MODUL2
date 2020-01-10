<?php


class product
{
  public $id;
  public $name;
  public $type;
  public $price;
  public $amount;
  public $date_created;
  public $infomation;
  
  public function __construct($_name,$_type,$_price,$_amount,$_date_created,$_infomation)
  {
      $this->name = $_name;
      $this->type = $_type;
      $this->price = $_price;
      $this->amount = $_amount;
      $this->date_created = $_date_created;
      $this->infomation = $_infomation;
  }
}