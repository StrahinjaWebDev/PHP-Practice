<?php
if(isset($_GET['ime']) and isset($_GET['prezime']))
{
  $ime=$_GET['ime'];
  $prezime=$_GET['prezime'];
  if($ime== "" or $prezime=="")
  echo "<p> svi podaci su ovacezni </p>";
  else
  echo "Podaci koje ste uneli su: $ime $prezime <br>";
}
else 
echo "podaci nisu poslati";

?>