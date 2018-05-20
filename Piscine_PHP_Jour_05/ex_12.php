<?php
function get_execution_time()
{
  $tps_exe = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
	echo $tps_exe;
}
?>
