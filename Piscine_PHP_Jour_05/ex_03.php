<?php
function  my_add_to_cookie($key, $value)
{
  $value = $value . "toto";
  setcookie($key, $value);
}
?>
