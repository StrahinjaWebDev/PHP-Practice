<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method='post'>
    <input type="text" name='naslov'/> <br> <br>
    <textarea name="tekst" id="tekst"  cols="30" rows="10"></textarea> <br> <br>
    <button name='submit' >Snimite vest</button>


  </form>
</body>
</html>

<?php
  if(isset($_POST['submit'])) {
      $naslov = $_POST['naslov'];
      $tekst = $_POST['tekst'];  
      $dat = date("Y/m/d H:i:s");
      $putanja = "datoteke/vesti.txt";
      if(file_exists($putanja)) 
    {
      $file = fopen($putanja, "a");
      fwrite($file, $naslov);
      fwrite($file, $tekst);
      fclose($file);
      echo "$dat <br> Naslov : $naslov <br>  Tekst: $tekst ";
    }
    
    else if($naslov == "" || $tekst == "") 
    echo "Unesite naslov i tekst";


  }


?>