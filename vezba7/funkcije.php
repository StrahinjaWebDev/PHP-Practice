<?php
function konekcija() {
$db=@mysqli_connect('localhost','root', '','pva_vezba7');
if(!$db)
{
  echo "neuspesno kektovano<br>";
  echo mqsqli_connect_errno().":".mysqli_connect_error();
  return false;
}
mysqli_query($db, "Set names utf8");
return $db;
}

function prikazKorisnika($db) {
  $upit= 'select * from korisnici';
    $odg=mysqli_query($db, $upit);
    if(mysqli_error($db))
    {
      echo "GRESKA!! <br>".mysqli_error($db);
    }
    else {
      echo "Broj zapisa : ".mysqli_num_rows($odg)."<br>";
      while($red=mysqli_fetch_array($odg, MYSQLI_ASSOC))
      {
        echo $red['id'].":".$red['ime']." ".$red['prezime']." ".$red['status'];
        echo($red['komentar']=="")?"<br>":$red['komentar']."<br>";
      }
    }
}
?>