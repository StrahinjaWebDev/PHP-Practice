<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Upis u datoteku</h3>
  <?php 
  $putanja="datoteke/upis.txt";
  $stringZaUpis = "Ovo je NOVI string koji hocu da upisem.\n Ovo je novi NOVI red";
  $file=fopen($putanja,"w");
  fwrite($file, $stringZaUpis);
  fclose($file);
  echo "Uspesan upis <br>";
  $sadrzaj = file_get_contents($putanja);
  $sadrzaj = str_replace("\n", "<br>" ,$sadrzaj);
  echo $sadrzaj;

?>
</body>
</html>