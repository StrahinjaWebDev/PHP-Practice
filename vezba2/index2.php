<?php
$a=5;$b=7;

if ($a==$b) echo "Brojevi su isti";
else echo "brojevi nisu isti";
echo "<hr>";
$a='b';
switch($a) {

  case 'a':
    echo "vrednost je a";
    break;
    case 'b':
      echo "vrednost je b";
      break;
      case 'x':
        echo "vrednost je a";
        break;
        default:
        echo"nije a ni b ni z";
    
    
}

echo "<hr>";
$a=array(2,4,5,6,7,8);
echo "vrednost prvog elementa je ". $a[0] . "<br>" ;

?>