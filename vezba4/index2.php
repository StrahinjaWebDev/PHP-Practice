<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Proizvodi</h1>
  
<?php
$putanja = "datoteke/proizvodi.txt";
if(file_exists($putanja)){
$i=0;
$file=fopen($putanja, "r");
while(($red=fgets($file))!=false)
{
  //echo $i. ": " . $red."<br>";
  $i++;
  
  $tmpNiz=explode("#",$red);
  for($j=0;$j<count($tmpNiz);$j++)
  echo $tmpNiz[$j]."<br>";
  $j++;
}
fclose($file);
}
else {
echo "Ne postoji datoteka";
  exit();
}


?>
  
</body>
</html>