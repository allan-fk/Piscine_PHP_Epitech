<?php
function my_generate_file (string $name)
{
  $crtFile = fopen($name . ".txt" , "w+");
  if ($crtFile = true)
  {
    fopen($name , "w+");
    return true;
  }
  else
  {
    return false;
  }
}
?>
