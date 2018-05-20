<?php
function aff_array(array $my_array)
{
	foreach ($my_array as &$value)
	{
		echo $value . "\n";
			
	}

	$cnt = count($my_array);
	return $cnt;
}
?>