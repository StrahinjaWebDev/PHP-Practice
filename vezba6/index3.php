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

 // echo "obj kreiran <br>";

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
  //echo "obj unisten<br>";
}

}
$osobe=array();
$osobe[] = new Ljudi("Bosko", "bogojevic", "4123");
$osobe[] = new Ljudi("Pera", "bog", "14412312");
$osobe[] = new Ljudi("Nikola", "bjevic", "6543244123");
$osobe[] = new Ljudi("Kiki", "jevic", "1244123");


for($i=0;$i<count($osobe);$i++)
echo $osobe[$i];
echo "<hr>";
foreach($osobe as $osoba)
echo $osoba;
echo "<hr>";
foreach($osobe as $osoba)
if ($osoba -> ime== "Bosko") echo $osoba;


?>