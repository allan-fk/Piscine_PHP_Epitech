<?php
function my_reset_session()
{
  session_unset();
  session_start();
  session_destroy();
  session_reset();
}
?>
