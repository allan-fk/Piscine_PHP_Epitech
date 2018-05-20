<?php
function make_pangolins(array &$my_array)
{	
	foreach($my_array as $key => $value)
	{
		$my_array[$key] = "pangolin";
	}
}
?>
