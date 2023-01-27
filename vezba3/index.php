<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRECA</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class='container'>
  <h1>Ovo je treca vezba</h1>
<?php 
//DEFINICIJA FUNKCIJE bez ulaznog parametra
function mojaFunkcija1()
{
  echo "<div class='alert alert-danger'>Ovo je por iz funkcije</div>";
}
//Poziv funkcije
mojaFunkcija1();

function mojaFunkcija2($s) 
{
  echo "<div class='alert alert-primary'>$s</div>";
} 
mojaFunkcija2("ovo je parametarska promenjljiva");
function mojaFunkcija3 ($a, $b)
{
  $x = $a + $b;
  echo "<div class='alert alert-warning'>Zbir dva br je $x</div>";
}
mojaFunkcija3(5,6);
function opciono($a,$b=0) {
  $x = $a + $b;
  echo "<div class='alert alert-warning'>Zbir dva br je $x</div>";
}
opciono(5);
function poruka($s, $nacin=0)
{
  if($nacin == 0) echo "<div class='alert alert-warning'>Zbir dva br je $s</div>";
  if($nacin == 1) echo "<div class='alert alert-success'>Zbir dva br je $s</div>";
  if($nacin == 2) echo "<div class='alert alert-info'>Zbir dva br je $s</div>";
}
poruka('ovo je warning');
poruka('uspesno snimljeni podaci',1);
poruka('nisu snimljeni',2);

function zbir($a, $b)
{
  $x=$a+$b;
  return $x;
}

$y = zbir(8,6);
echo "zbir odstampan iz gl programa je : $y<br>"; 
$a=5;$b=7;$c=9;
$x=zbir(zbir($a,$b),$c);
echo "zbir tri broja je: $x<br>";
?>
</div>

  
  
</body>
</html>