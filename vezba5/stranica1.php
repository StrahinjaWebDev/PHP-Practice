<?php 
require_once("funkcije.php");
session_start();
if !
{
  echo "morate se prijaviti da bi ste videli stranic";
  echo "<a href='login.php?odjava'>Prijavite se </a>";
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Stranica 1</h1>
  <?php
  echo "prijavljeni ste kao".$_SESSION['user']."(".$_SESSION['status'].")<br>";
  echo "<a href='login.php?odjava'>Odjavite se </a>";
  ?>
</body>
</html>