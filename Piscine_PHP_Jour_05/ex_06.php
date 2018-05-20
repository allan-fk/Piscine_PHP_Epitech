<?php
function my_print_session(string $key)
{
  session_start();
  if (isset($_SESSION[$key]))
  {
    echo $_SESSION[$key] . "\n\n";
  }
}
?>
