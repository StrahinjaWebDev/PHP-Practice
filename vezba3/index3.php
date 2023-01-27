<?php
 require_once("funkcije.php")
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class='container'>
    <form action="index3.php" method="POST">
    <input type="text" name="op1"> <input type="text" name="op2"> <br>
    <select name="operacija" id="operacija">
    <option value="+">Sabiranje</option>
    <option value="-">oduzimanje</option>
    <option value="/">deljenje</option>
    <option value="*">mnozenje</option>
    </select>
    <br><br>
    <button type="submit">Posaljite podatke</button>
    </form>
    <hr>
    <?php
    // $x=kalkulator(8,5);
    // echo "<div class='alert alert-warning'>$x</div>";
    //
    if(isset($_POST['op1']))
    {
 $op1 = $_POST['op1'];
 $op2 = $_POST['op2'];
 $operacija = $_POST['operacija'];
 $x=kalkulator($op1,$op2,$operacija);
 echo "<div class='alert alert-warning'>$x</div>";
    }
    else 
    poruka('dobrodosli na stranicu',1);
    
    ?>
    
  </div>
  
</body>
</html>