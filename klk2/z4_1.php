<?php
  session_start();
  if(isset($_POST['submit'])) {
    $ime = $_POST['ime'];
    $pass = $_POST['pass'];

    $_SESSION['ime'] = $ime;
    $_SESSION['pass'] =$pass;

    header('Location:z4_2.php');


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
  <form action="" method='post'>
  <input type="text" name='ime'>
  <input type="text" name='pass'>
  <button type='submit' name='submit'>Pipni me</button>


  </form>
</body>
</html>