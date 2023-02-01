<?php


session_start();
if(isset($_POST['submit'])){
  $bojaStranice = $_POST['bojaStranice']; 
  $bojaTeksta = $_POST['bojaTeksta'];

  $_SESSION['bojaStranice'] = $bojaStranice;
  $_SESSION['bojaTeksta'] = $bojaTeksta;

  header("Location:z3_2.php");

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

  <select name="bojaStranice" id="bojaStranice">
<option value="bela">Bela</option>
<option value="crna">Crna</option>
<option value="plava">Plava</option>
<option value="zuta">Zuta</option>
<option value="crvena">Crvena</option>

  </select>

  <select name="bojaTeksta" id="bojaTeksta">
<option value="bela">Bela</option>
<option value="crna">Crna</option>
<option value="plava">Plava</option>
<option value="zuta">Zuta</option>
<option value="crvena">Crvena</option>

  </select>

  <button type='submit' name='submit'>Klikni me</button>
  </form>
</body>
</html>

