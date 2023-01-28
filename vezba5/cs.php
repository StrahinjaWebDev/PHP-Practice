<?php
session_start();
if (isset($_SESSION['x']))
{
$x=$_SESSION['x'];
echo 'vrednost promenjive x je'.$x;
} else
echo "sesija ne postoji";
?>