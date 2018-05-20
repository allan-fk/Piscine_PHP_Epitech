<?php
function  str_lower_epur($str = NULL)
{
  if (is_string($str))
  {
    $delLastEndW = trim($str); // Delete start/end spaces
    $del2w = preg_replace("/\s+/", " ", "$delLastEndW"); // Delete 2x spaces
    $strLow = strtolower($del2w); // Words in Lowcase
    $strRev = strrev(ucwords(strrev($strLow))); // end Words in Uppercase
    return $strRev;
  }
  else
  {
    if (!is_string($str))
    {
      return;
    }
  }
}
?>
