<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="zadatak3.php" method="GET">
    <input name="date" type="date"> <br><br>
    <input name="time" type="time"> <br><br>
    <button name='btnShow'>Prikazi</button>
  </form>
  <?php
function timePassed($date, $time) {
  $now = new DateTime();
  $given = new DateTime($date . ' ' . $time);
  if($given > $now){
      echo "Izabrali ste datum u buducnosti";
      return;
  }
  $interval = $now->diff($given);
  $days = $interval->format('%a');
  $hours = $interval->format('%h');
  $minutes = $interval->format('%i');
  echo "Vreme koje je proslo: $days dana $hours sati $minutes minuta";
}



if (isset($_GET['btnShow'])) {
  $date = $_GET['date'];
  $time = $_GET['time'];
  timePassed($date, $time);
}


  
?>

</body>
</html>




