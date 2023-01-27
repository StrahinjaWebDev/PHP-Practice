<?php
  function kalkulator($op1,$op2, $operator="+")
  {
    switch($operator)
    {
      case '+';
          $x=$op1+$op2;
      break;
      case'-';
      $x=$op1-$op2;
      break;
      case'*';
      $x=$op1*$op2;
      break;
      case'/';
      if ($op2  == 0)$x='nedozvoljeno deljene nulo';
      else
      $x=$op1/$op2;
      break;
      default: $x="nije def opcija";
    }
    return $x;
  }

  function poruka($s, $nacin=0)
{
  if($nacin == 0) echo "<div class='alert alert-warning'>Zbir dva br je $s</div>";
  if($nacin == 1) echo "<div class='alert alert-success'>Zbir dva br je $s</div>";
  if($nacin == 2) echo "<div class='alert alert-info'>Zbir dva br je $s</div>";
}

?>

