<?php

if(isset($_COOKIE['ime']) && isset($_COOKIE['pass'])) {

  if ($_COOKIE['ime'] === 'pva' && $_COOKIE['pass'] === '12345'){
    echo 'Sefe tisi';}
   else if  ($_COOKIE['ime'] != 'pva' || $_COOKIE['pass'] != '12345'){
    echo "napolje";
   }}



?>