<?php
function my_pow($nb_a = NULL , $nb_b = NULL)
{
    if (!is_int($nb_a) && !is_int($nb_b)  || isset($nb_a, $nb_b) || $nb_a === 0 || $nb_b < 0)
  // if (!is_int($nb_a) && !is_int($nb_b)  || (!$nb_a) && (!$nb_b) || $nb_a == 0 || $nb_b == 0 || empty( $nb_a) && empty($nb_b) || $nb_a == "" && $nb_b == "")
  {
    return null;
  }
  elseif {$nb_b === 0)
  {
    return 1;
  }
  else
  {
    $pow= $nb_a ** $nb_b;

  }
    return $pow;
}
?>
