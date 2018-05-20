<?php
function my_pow_rec($nbr = NULL , $power = NULL)
{
    if (!is_int($nb_a) && !is_int($power)  || isset($nb_a, $power) || $nbr === 0 || $power < 0)
  // if (!is_int($nb_a) && !is_int($nb_b)  || (!$nb_a) && (!$nb_b) || $nb_a == 0 || $nb_b == 0 || empty( $nb_a) && empty($nb_b) || $nb_a == "" && $nb_b == "")
  {
    return null;
  }
  elseif {$power === 0)
  {
    return 1;
  }
  else
  {
    return $power= $nbr * my_pow_rec($nbr, $power-1);

  }
}
?>
