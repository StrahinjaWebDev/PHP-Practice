<?php

class Ljudi{
private $ime;
private $prezime;
private $jmbg;

public function __construct($a,$b,$c)
{
  $this -> ime = $a;
  $this -> prezime = $b;
  $this -> jmbg = $c;

  echo "obj kreiran <br>";

}
public function __set($name, $value) {
  $this -> $name=$value;
}
public function __get($name)
{
  return $this -> $name;
}
public function __toString()
{
  return $this->ime." ".$this->prezime."(".$this->jmbg.")<br>";
}
public function __destruct()
{
  echo "obj unisten<br>";
}

}

$obj = new Ljudi("Bosko", "bogojevic", "4123");

echo $obj -> ime."<br>";
echo $obj -> prezime."<br>";
echo $obj -> jmbg."<br>";

echo $obj;


?>