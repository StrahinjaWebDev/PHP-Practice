<?php
require_once("klase/classKalkulator.php");
$obj= new Kalkulator(5,6);
echo $obj;
echo "Sabiranje:".$obj->sabiranje()."<br>";
echo "Oduzimanje:".$obj->oduzimanje()."<br>";
echo "Mnozenje:".$obj->mnozenje()."<br>";
echo "Deljenje:".$obj->deljenje()."<br>";
echo "Ostatak:".$obj->ostatak()."<br>";



?>