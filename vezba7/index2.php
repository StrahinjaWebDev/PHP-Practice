<?php
require_once("funkcije.php");
$db=konekcija();
if(!$db)exit();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Stranica 2</h1>
  <form action="index2.php" method='post'>
    <input type="text" name='ime' id='ime' placeholder='unesite ime'><br><br>
    <input type="text" name='prezime' id='prezime' placeholder='unesite prezime'><br><br>
    <input type="email" name='email' id='email' placeholder='unesite email'><br><br>
    <input type="text" name='lozinka' id='lozinka' placeholder='unesite pass'><br><br>
    <select name="status" id="status">
      <option value="Administrator">Admin</option>
      <option value="Urednik">Urednik</option>
      <option value="Korisnik">Korisnik</option>
    </select>
    <textarea name="komentar" id="komentar" cols="20" rows="5"></textarea><br><br>
    <button name='dugme'>Snimi podatke</button>
  </form>
  <?php
  if(isset($_POST['dugme']))
  {
    $ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    $email=$_POST['email'];
    $lozinka=$_POST['lozinka'];
    $status=$_POST['status'];
    $komentar=$_POST['komentar'];
    if($ime!="" and $prezime!="" and $email!="")
    {
      $upit="INSERT INTO korisnici(ime, prezime,email,lozinka, status,komentar) VALUES('$ime','$prezime',$email,$lozinka,$status, $komentar)";
    mysqli_query($db,$upit);
    if(mysqli_error($db))
    {
      echo "GRESKA PRILIKOM IZVRSAVANJA UPITA".mysqli_error($db);

    }else 
    echo "dodato redova".mysqli_affected_rows($db)."<br>";
    echo "poslednji dodat id:".mysqli_insert_id($db)."<br>";

    }
    else echo "svi podaci su obavezni";
  }
    
  ?>
</body>
</html>