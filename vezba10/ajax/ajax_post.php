<?php
if(isset($_POST['ime']) and isset($_POST['prezime']))
{
  $ime=$_POST['ime'];
  $prezime=$_POST['prezime'];
  if($ime== "" or $prezime=="")
  echo "<p> svi podaci su ovacezni </p>";
  else
  echo "Podaci koje ste uneli post met su: $ime $prezime <br>";
}
else 
echo "podaci nisu poslati";

?>