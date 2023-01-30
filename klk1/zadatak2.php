<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>Datum vaseg rodjenja</h1>
    <form method="post">
    <input type="date" id="dob" name="dob">
    <input type="submit" name="submit" value="Show">
</form>
</html>
<?php
if (isset($_POST['submit'])) {
    $dob = $_POST['dob'];
    $currentYear = date('Y');
    $dobYear = date('Y',  strtotime($dob));
    if($dobYear>$currentYear){
        echo "Unesite dobar datum rodjenja";
    } else {
        for ($i = $dobYear; $i <= $dobYear; $i++) {
            $birthday = date('F d, Y', strtotime($dob . ' ' . $i));
            $day = date('l', strtotime($birthday));
            echo 'Tvoj rodjendan ' . $birthday . ' je bio ' . $day . '<br>'
            ;
            
            ;
        }
    }
}
?>  //////////////////Ukoliko korisnik izabere datum koji još uvek nije prošao prikazuje se poruka o grešci, primer://// nije uradjeno

