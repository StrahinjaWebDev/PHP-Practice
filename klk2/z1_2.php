<?php
$font_color = (isset($_COOKIE['bojaSlova'])) ? $_COOKIE['bojaSlova'] : 'white';
$bg_color = (isset($_COOKIE['bojaStranice'])) ? $_COOKIE['bojaStranice'] : 'black';
?>

<style>
  body {
    background-color: <?php 
      switch($bg_color) {
        case 'Bela':
          echo 'white';
          break;
        case 'Crna':
          echo 'black';
          break;
        case 'Plava':
          echo 'blue';
          break;
        case 'Crvena':
          echo 'red';
          break;
        case 'Zuta':
          echo 'yellow';
          break;
        default:
          echo 'black';
      }
    ?>;
    color: <?php 
      switch($font_color) {
        case 'Bela':
          echo 'white';
          break;
        case 'Crna':
          echo 'black';
          break;
        case 'Plava':
          echo 'blue';
          break;
        case 'Crvena':
          echo 'red';
          break;
        case 'Zuta':
          echo 'yellow';
          break;
        default:
          echo 'white';
      }
    ?>;
  }
</style>

<p>Tekst</p>