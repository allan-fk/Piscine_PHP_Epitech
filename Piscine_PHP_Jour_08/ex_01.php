<?php
function  which_is_longer($str1 = NULL, $str2 = NULL)
{
  if (!is_string($str1) || !is_string($str2))
  {
    return -1;
  }
  else
  {
    if (strlen($str1) == strlen($str2))
    {
      return strlen($str1);
    }
    if (strlen($str1) > strlen($str2))
    {
      return strlen($str1);
    }
    if (strlen($str1) < strlen($str2))
    {
      return strlen($str2);
    }
  }
}
?>
