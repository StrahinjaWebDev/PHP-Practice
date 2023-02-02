<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method='get'>
  <input type="date" name='dat'>
  <input type="time" name='vreme'>

  <button type='submit' name='prikazi'>Prikazi</button>

  </form>
</body>
</html>

<?php
  if(isset($_GET['prikazi'])) {
    $dat = $_GET['dat'];
    $vreme = $_GET['vreme'];
    $now = date('Y-m-d h:i:s');
    
echo "$dat  $vreme" ;

    if($dat > $now) {
      echo "<br> izaberi dat pre dns";
    } else {
      $oduz = strtotime($dat) - strtotime($now);
      echo "<br> $oduz";
    }


  }


?>