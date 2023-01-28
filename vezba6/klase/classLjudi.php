<?php

class Ljudi{
private $ime;
private $prezime;
private $jmbg;

/*public function __construct($a,$b,$c)
{
  $this -> ime = $a;
  $this -> prezime = $b;
  $this -> jmbg = $c;

  echo "obj kreiran <br>";

}
}*/
}

class Radnik extends Ljudi{
  private $firma;
  private $brKnjizice;

  public function __construct();

  public function __construct($a, $b, $c, $d,$e){
    $this -> ime = $a;
  $this -> prezime = $b;
  $this -> jmbg = $c;
  $this -> firma = $d;
  $this -> brKnjizice = $e;


  }
  public function __toString() {
    return $this -> ime." ".$this->prezime." ".$this->firma;
  }
}

class Students extends Ljudi {
  private $skola;
  private $indeks;

  public function __construct();

  public function __construct($a, $b, $c, $d,$e){
    $this -> ime = $a;
  $this -> prezime = $b;
  $this -> jmbg = $c;
  $this -> skola = $d;
  $this -> indeks = $e;


  }
  public function __toString() {
    return $this -> ime." ".$this->prezime." ".$this->skola;
  }
}
?>