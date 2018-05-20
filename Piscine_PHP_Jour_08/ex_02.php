<?php
function  my_rounds($nb)
{
  $arr1 = round($nb);
  $arr2 = ceil($nb);
  $arr3 = (ceil($nb) - 1);
  echo "Results : $arr1 - $arr2 - $arr3 \n";
}
?>
