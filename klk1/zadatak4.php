<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Zadatak 4</h1>
  <form action="zadatak4.php" method='post'>
  <input  type="text" name='naslov' placeholder='Unesite naslov'> <br><br>
  <textarea name='unesite' rows="10" cols="21"placeholder='Unesite tekst'></textarea> <br><br>
  <button name='btnSnimite'>Snimite vest</button> 
  </form>
</body>
</html>
<?php
if(isset($_POST['btnSnimite'])) {
  $naslov = $_POST['naslov'];
  $unesite = $_POST['unesite'];
  $putanja="datoteke/vesti.txt";
  $date = date (" jS \of F  h:i:s ");
    
  if(file_exists($putanja))
  {
  $file= fopen($putanja,"a");
  fwrite($file, $naslov );
  fwrite($file, $unesite);
  fclose($file);

  echo "$date <br> Naslov : $naslov <br>  Tekst: $unesite ";
    
  }
  else {
    echo"Ne postoji datoteka";
    exit();
  }

  if ($naslov == "" || $unesite == "") {
    echo "<br> Morate uneti sve podatke!";
    
  }}



?>