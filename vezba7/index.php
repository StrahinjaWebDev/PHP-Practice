<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Stranica 1</h1>
  <?php
  require_once("funkcije.php");
  $db=@mysqli_connect('localhost','root', '','pva_vezba7');
  if(!$db)
  {
    echo "Greska prilikom konekcije<br>";
    echo mqsqli_connect_errno($db).":".mysqli_connect_error($db);
  } else 
  {
    mysqli_query($db, "Set names utf8");
    echo "uspesna konekcija na bazu<br>";
    
      prikazKorisnika($db);
    
  }

?>
</body>
</html>