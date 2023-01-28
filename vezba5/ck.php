<?php
if(isset($_COOKIE['x']) and isset($_COOKIE['status'])) {
  
echo "prijavljeni ste kao ".$_COOKIE['status']."(".$_COOKIE['x'].")";
}
else
echo "niste prija"
?>