<?php

$pozadina = isset($_COOKIE['pozadina']) ?$_COOKIE['pozadina'] : 'black';
$tekst = isset($_COOKIE['tekst']);






?>

<style>
  body {
    background-color:<?php
      switch($pozadina) {
        case 'zuta':
      echo 'yellow';
      break;
      case 'bela':
      echo 'white';
      break;
      case 'crna':
      echo 'black';
      break;
      case 'crvena':
      echo 'red';
      break;
      case 'zelena':
      echo 'green';
      break;
  
}




?>;
  }
  </style>
  