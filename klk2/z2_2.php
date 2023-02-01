<?php
session_start();

if(isset($_COOKIE['ime']) && isset($_COOKIE['pass'])){

  if ($_COOKIE['ime'] === 'pva' && $_COOKIE['pass'] === '12345')
  {
    echo "Dobrodosli";
  }

 else {
  if ($_COOKIE['ime'] !== 'pva' || $_COOKIE['pass'] !== '12345')
  echo 'Pogresno ime ili lozinka';


}
}

?>