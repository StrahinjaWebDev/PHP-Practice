<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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
    <button type='submit' name='submit'>Prijavi se</button>

    </form>
  </body>
  </html>
</body>
</html>


<?php



  if(isset($_POST['submit'])){

    $ime = $_POST['ime'];
    $pass = $_POST['pass'];

    setcookie('ime',$ime,time()+60);
    setcookie('pass',$pass,time()+60);

    header('Location: z2_2.php');


  }

?>