<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Zadatak 5</h1>
  <form action="zadatak5.php" method='post'>
  <input type="text" name='model' placeholder='Unesite ime'>
  <select name="kategorije" id="kategorije">
    <option value="0">Odaberite tip</option>
    <?php
  $file= fopen("datoteke/kategorije.txt", "r");
  while(($red=trim(fgets($file)))!=NULL)
  echo"<option value'$red'>$red</option>";
  fclose($file);

?>
  </select>
  <input type="number" name='cena' step='100' value = '0'>
  <button type='submit'>Snimi podatke</button>
  <hr>
  <?php
  if (isset($_POST['kategorije']))
  {
    $kat=$_POST['kategorije'];
    if ($kat!="0") {
        $model = $_POST['model'];
        $cena = $_POST['cena'];
        $stringZaUpis="$model#($cena din)#$kat";
        $file=fopen("datoteke/proizvodi.txt", "a");
        fwrite($file,$stringZaUpis);
        fclose($file);
    }else 
    echo "niste izabrali kategoriju";
  }


?>

<hr>

<?php
  $putanja = "datoteke/proizvodi.txt";
  if($putanja){
  $i=0;
  $file=fopen($putanja, "r");
  while(($red=fgets($file))!=false)
  {
    $i++;
    
    $tmpNiz=explode("#",$red);
    for($j=0;$j<count($tmpNiz);$j++)
    echo $tmpNiz[$j]. "<br>";
    $j++;
  }
  fclose($file);
  }
  else {
  echo "Ne postoji datoteka";
    exit();
  }
?>

  </form>
</body>
</html>