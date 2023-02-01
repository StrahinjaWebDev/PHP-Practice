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
    <select name="bojaSlova" id="bojaSlova">
      <option value="Bela">Bela</option>
      <option value="Crna">Crna</option>
      <option value="Plava">Plava</option>
      <option value="Crvena">Crvena</option>
      <option value="Zuta">Zuta</option>
    </select>
    <select name="bojaStranice" id="bojaStranice">
      <option value="Bela">Bela</option>
      <option value="Crna">Crna</option>
      <option value="Plava">Plava</option>
      <option value="Crvena">Crvena</option>
      <option value="Zuta">Zuta</option>
    </select>
    <button type='submit' name='btnBoja'>Klikni me</button>
  </form>
</body>
</html>
<?php
  if(isset($_POST["btnBoja"])) {
     $boja_slova = $_POST['bojaSlova'];
     $boja_stranice = $_POST['bojaStranice'];

     setcookie('bojaSlova',$boja_slova, time()+60);
     setcookie('bojaStranice',$boja_stranice, time()+60);

     header('Location:z1_2.php');
    }
?>