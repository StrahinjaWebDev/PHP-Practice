<?php
  function kalkulator($op1,$op2, $operator="+")
  {
    switch($operator)
    {
      case '+';
          $x=$op1+$op2;
      break;
      case'-';
      $x=$op1-$op2;
      break;
      case'*';
      $x=$op1*$op2;
      break;
      case'/';
      if ($op2  == 0)$x='nedozvoljeno deljene nulo';
      else
      $x=$op1/$op2;
      break;
      default: $x="nije def opcija";
    }
    return $x;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class='container'>
  <h1>Treca vezba - stranica 2</h1> 
  <?php 
    $rez = kalkulator(2,5);
    echo"rez je : $rez <br><br>";
    $rez = kalkulator(2,5, "-");
    echo"rez je : $rez <br><br>";
    $rez = kalkulator(2,5, "*");
    echo"rez je : $rez <br><br>";
    $rez = kalkulator(2,0, "/");
    echo"rez je : $rez <br><br>";
    $rez = kalkulator(2,5, "?");
    echo"rez je : $rez <br><br>";
  ?>

  </div>
</body>
</html>