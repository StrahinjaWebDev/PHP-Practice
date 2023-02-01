<?php
  session_start();

  $ime = $_SESSION['ime'];
  $pass = $_SESSION['pass'];

  if($ime == 'pva' && $pass == '12345' ) {
    echo "Dobrodosao sefe";
  } else 
  {
    echo "Des poso?";
  }




?>