<?php
if(isset($_GET['funkcija']))
{
  $db=mysqli_connect("localhost", "root","","pva_vezba7");
  mysqli_query($db, "SET NAMES utf8");
  $funkcija=$_GET['funkcija'];
  if($funkcija='pretraga')
  {

    $termin=$_POST['termin'];
    if($termin!=''){
      $upit="SELECT * FROM korisnici WHERE ime LIKE ('%$termin%') OR prezime LIKE ('%$termin%')";
      $rez=mysqli_query($db, $upit);
      if(mysqli_num_rows($rez)!=0)
      {
        while ($red=mysqli_fetch_array($rez, MYSQLI_ASSOC))
        {
          echo "{$red['id']} : {$red['ime']} {$red['prezime']} {$red['email']}}<br>";
        }
      }
      else echo "nema ni jedan zapis koji odg";
    }
    else 'niste uneli termin pretrage!';
}
if ($funkcija==''){

}

}

else echo 'niste uneli metodu'


?>