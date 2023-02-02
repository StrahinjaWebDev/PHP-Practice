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
  <input type="date" name='dat'> <br> <br>
  <button name='prikazi'>Prikazi</button>
  


  </form>
</body>
</html>

<?php

 if(isset($_POST['prikazi'])){
  $dat = $_POST['dat'];
  $datd =  date("l",  strtotime($dat));
  $danas = date("Y-m-d");
 
  echo 'Za datum rodjenja izabrali ste ', $dat; 

  if ( strtotime($dat) > strtotime($danas) ) {
    echo ' <br> Izaberi datum koji nije u buducnosti';
  

 } else {
  
  for ($i =$dat; $i <= $danas; $i->modify('+1 year'))
    

    
  

 }
 }

?>