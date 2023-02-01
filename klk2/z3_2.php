<?php 
session_start();

$bojaTeksta = (isset($_SESSION['bojaTeksta'])) ?
  $_SESSION['bojaTeksta'] : "black";


$bojaStranice = (isset($_SESSION['bojaStranice'])) ?
  $_SESSION['bojaStranice'] : "white";


?>

<style>

    body {
          background-color: <?php 
         switch($bojaStranice) {
            case 'bela':
            echo 'white';
            break;
            case 'crna':
            echo 'black';
            break;
            case 'plava':
            echo 'blue';
            break;
            case 'zuta':
            echo 'yellow';
            break;
            case 'crvena':
            echo 'red';
            break;
            default:
            echo 'white';
          }

?>;

          color: <?php
          switch($bojaTeksta) {
            case 'bela':
              echo 'white';
              break;
              case 'crna':
              echo 'black';
              break;
              case 'plava':
              echo 'blue';
              break;
              case 'zuta':
              echo 'yellow';
              break;
              case 'crvena':
              echo 'red';
              break;
              default:
              echo 'black';

            }
            ?>;
          }
        </style>
        
        <p>Tekst</p>
    