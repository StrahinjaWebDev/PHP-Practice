<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Citanje datoteke</h1>
  <?php 
  $putanja =  "datoteke/dat.txt";
    if(file_exists("datoteke/dat.txt"))
    {
      $sadrzaj =  file_get_contents($putanja);
      $sadrzaj=str_replace("\n", "<br>", "$sadrzaj ");
      echo $sadrzaj;
    }
    else
    {
      echo "Ne postoji datoteka";
      exit();
    }
  ?>
  <hr>
  <?php
  if(file_exists($putanja)){
    $i=0;
    $file=fopen($putanja, "r");
    while(($red=fgets($file))!=false)
    {
      echo $i. ": " . $red."<br>";
      $i++;
    }
    fclose($file);
  }
  else {
    echo "Ne postoji datoteka";
      exit();
  }

  ?>
  <hr>
  <?php 
  if(file_exists($putanja)){
    $i=0;
    $file=fopen($putanja, "r");
    while(($k=fgetc($file))!=false)
    {
      echo $i. ": " . $k."<br>";
      $i++;
    }
    fclose($file);
  }
  else {
    echo "Ne postoji datoteka";
      exit();
  }

  ?>
  <hr>
  <?php
  $putanja = "datoteke/proizvodi.txt";
if(file_exists($putanja)){
  $i=0;
  $file=fopen($putanja, "r");
  while(($k=fgets($file))!=false)
  {
    echo $i. ": " . $k."<br>";
    $i++;
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