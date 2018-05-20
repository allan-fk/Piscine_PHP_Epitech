<?php
function  clear_and_replace($string, $word)
{
  $DelSpaces = trim($string); // Sup spaces star / end
  $replace = preg_replace("/$word/", "Pangolin", $DelSpaces, 2); // Replace 2first $word => Pangolin of $DelSpaces
  return $replace;
}
?>
