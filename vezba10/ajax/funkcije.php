<?php
if(isset($_GET['metoda']))
{
  $metoda=$_GET['metoda'];
  if($metoda='get')
  $ime=$_GET['ime'];
  $prezime=$_GET['prezime'];
  if($ime== "" or $prezime=="")
  echo "<p> svi podaci su ovacezni </p>";
  else
  echo "Podaci koje ste uneli su: $ime $prezime <br>";

}
if ($metoda=='post'){
  $ime=$_POST['ime'];
  $prezime=$_POST['prezime'];
  if($ime== "" or $prezime=="")
  echo "<p> svi podaci su ovacezni </p>";
  else
  echo "Podaci koje ste uneli post met su: $ime $prezime <br>";
}



else echo 'niste uneli metodu'


?>