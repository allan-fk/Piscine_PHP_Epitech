<?php
function  my_facto($nbr = NULL)
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
?>
