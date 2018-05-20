<?php
function  sum_it($nbr, $iteration);
{
  if (!$nbr)
  {
    return null;
  }
  elseif ($nbr > 0)
  {
    for($result = 1; $nbr > 0; $nbr --)
    $result *= $nbr;
    return $result;
  }
}
var_dump(my_facto(-25));
?>
