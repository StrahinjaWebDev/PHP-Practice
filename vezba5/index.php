<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Upload datoteka</h1>
  <form action="index.php" method="Post" enctype="multipart/form-data">
    <input type="text" name="imeSlike" id="imeSlike"><br><br>
    <input type="file" name="dat" id="dat" placeholder="unesite ime"> <br><br>
    <button name="dugme">Snimi podatke</button>
  </form>
  <hr>
  <?php

  if(isset($_POST['dugme']))
{
  $folder='uploads/';
  $imeDat=$folder.$_FILES['dat']['name'];
  if(isset($_POST['ime']))$ime=$_POST['ime'];
  //var_dump($_FILES);
  if($_FILES['dat']['size']<1000000)
  {

    $tmpNiz=explode($_FILES['dat']['name']);
    if($tmpNiz[count($_FILES['dat'])-1])=="docx"
    if(!move_uploaded_file($_FILES['dat']['tmp_name'],$imeDat))
  echo 'neuspelo prebacivanje datoteke na server!';
  }
  
  else
  echo "datoteka prevelika";
}


  ?>
</body>
</html>