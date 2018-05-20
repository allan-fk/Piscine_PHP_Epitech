<?php
function my_generate_file ($name)
{
  if ($name = "")
  {
    fopen("$name.txt" , "w");
    return true;
  }
  else
  {
    return false;
  }
}
?>
