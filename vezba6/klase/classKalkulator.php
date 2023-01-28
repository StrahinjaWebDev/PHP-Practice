<?php 
class Kalkulator {
  private $op1;
  private $op2;

  public function __construct($x, $y)
  {
    $this -> op1= $x;
    $this -> op2= $y;

  }
  public function __toString()
  {
    return "Klasa za aritmeticke operacije<br>";
  }
  function sabiranje()
  {
    return $this->op1+$this->op2;
  }
  function oduzimanje()
  {
    return $this->op1-$this->op2;
  }
  function mnozenje()
  {
    return $this->op1-$this->op2;
  }
  function deljenje()
  {
    if($this-> op2==0)
    return "nedozvoljeno delejnje sa nulom";
    else 
      return $this->op1/$this->op2;
  }
  function ostatak()
  {
    return $this->op1%$this->op2;
  }
}

?>