<?php
function  my_mail($mail = NULL)
{
  if (is_string($mail))
  {
    $startStr = strstr($mail, '@');
    $endStr = strrchr($mail, '.');
    $posStr = substr($startStr, strpos($startStr, "@") +1);
    $cutEnd = str_replace("$endStr", "",$posStr);
    echo $cutEnd . "\n";
  }
  else
  {
    if(!$mail)
    {
      return;
    }
  }
}
?>
