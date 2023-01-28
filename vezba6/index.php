<?php

class Ljudi{
  public $x;
  protected $y;
  private $z;

  public function dodeliVrednost($vrednost) {

    $this->y=$vrednost;
  } 
  public function procitajVrednost()
  {
    return $this -> y;
  }
}

$obj = new Ljudi();
$obj ->x=5;
echo "Vrednost svojstva x u objektu je".$obj->x."<br>";
//$obj->y=5;
$obj -> dodeliVrednost(10);
echo "Vrednost svojstva y u objektu je:".$obj->procitajVrednost()."<br>";


?>