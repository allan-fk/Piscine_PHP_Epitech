<?php
function helix_post_finder()
{
  $key = "phelix";
  if (isset($_POST[$key]))
  {
    return $_POST[$key];
  }
  else
  {
    return null;
  }
}
?>
