<?php
function  my_cat_files()
{
  $tArgs = func_get_args();
  $end_tArgs = end($tArgs);
  $ctArgs = count($tArgs) - 1;
  for ($i=0; $i < $ctArgs ; $i++)
  {
    $shwFile = file_get_contents($tArgs[$i]);
    $ret = $shwFile . "\n_____\n";
    return $ret;

  }
  $shwFile = file_get_contents($end_tArgs);
  $ret2 = $shwFile . "\n";
  return $ret2;
}
?>
