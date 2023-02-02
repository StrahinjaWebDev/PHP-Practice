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
  <input type="date" name='date1'> <br><br>
  <input type="date" name='date2'> <br><br>
  <button type='submit' name='prikazi'>Prikazi</button>

  </form>
</body>
</html>

<?php
if(isset($_POST['prikazi'])){

  $time1 = ($_POST['date1']);
  $time2 = ($_POST['date2']);

  $date1 = strtotime($_POST['date1']);
  $date2 = strtotime($_POST['date2']);
  if ($date1 > $date2) {
    echo "Prvi datum mora biti pre drugog.";
  } else {
    $diff = $date2 - $date1;
    $days = $diff / (60 * 60 * 24);
    echo "Broj dana od $time1  do $time2 je: $days.";
  }
  





}

?>