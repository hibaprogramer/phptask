<?php
class Prodect {
  var  $code;
  var $name;
  var $price;
  var $image_name;


  function __construct($fcode , $fname , $fprice,$fimage_name)
  {
   $this->code=$fcode;
    $this->name=$fname;
    $this->price=$fprice;
    $this->image_name=$fimage_name;
  }



  function setcode($cd)
  {
      $this->code=$cd;
  }

 function setname($nm)
  {
      $this->name=$nm;
  }
  function setprice($pc)
  {
      $this->price=$pc;
  }
  function setimage($mg)
  {
      $this->image_name=$mg;
  }
 public function getcode()
  {
     return $this->code;
  }

 public function getname()
  {
     return $this->name;
  }

 public function getprice()
  {
     return $this->price;
  }

 public function getimage()
  {
     return $this->image_name;
  }
}


?>