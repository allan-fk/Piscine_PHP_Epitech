<?php
function  my_print_cookie($key)
{
  $value = $key;
  setcookie($key, $value);
  if (isset($_COOKIE[$key]))
  {
    echo $_COOKIE[$key] . "_END\n";
  } else {
    return null;
  }
}
?>
