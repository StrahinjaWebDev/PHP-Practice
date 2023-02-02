<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method='post'>
  <select name="pozadina" id="pozadina">
    <option value="bela">bela</option>
    <option value="crna">crna</option>
    <option value="crvena">crvena</option>
    <option value="zelena">zelena</option>
    <option value="zuta">zuta</option>
  </select>
  <select name="tekst" id="tekst">
    <option value="bela">bela</option>
    <option value="crna">crna</option>
    <option value="crvena">crvena</option>
    <option value="zelena">zelena</option>
    <option value="zuta">zuta</option>
  </select>
  <button name='submit'>Madjija</button>
  


  </form>
</body>
</html>

<?php
  if(isset($_POST['submit'])) {
    $pozadina = $_POST['pozadina'];
    $tekst = $_POST['tekst'];

    setcookie('pozadina',$pozadina,time()+60);
    setcookie('tekst',$tekst,time()+60);

    header("Location:z1_2.php");
  }

?>