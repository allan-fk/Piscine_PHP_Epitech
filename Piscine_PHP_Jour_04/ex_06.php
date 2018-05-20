<?php
function get_angry_bird(int $nbr)
{
	$str = "";
	for ($i = 1; $i <= $nbr; $i++) 
	{
	    	$str .= "piou";
	}
	return $str . "\n";
}
?>