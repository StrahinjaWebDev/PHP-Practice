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
  <button name='login'>Prijavi se </button>

  </form>
</body>
</html>

<?php
  if(isset($_POST['login'])) {
    $ime = $_POST['ime'];
    $pass = $_POST['pass'];

    setcookie('ime',$ime,time()+60);
    setcookie('pass',$pass,time()+60);

    header("Location:z2_2.php");
  }


?>