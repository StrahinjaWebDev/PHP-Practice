<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method='post'>
  <input name='date1' type="date"> <br><br>
  <input name='date2' type="date"> <br><br>
  <button name='submit'>Prikazi</button> <br><br>
  </form>
</body>
</html>
<?php
  if (isset($_POST['submit'])) {
  $date1 = new DateTime($_POST['date1']);
  $date2 = new DateTime($_POST['date2']);
  $interval = $date1->diff($date2);
  if ($interval->invert === 1) {
    echo 'Greska izaberite dobar opseg datuma';
} else {
  echo 'Broj dana od ' .$_POST['date1']  .' do '  .$_POST['date2']  .$interval->format(' je  %a dana');
  }
}


?>