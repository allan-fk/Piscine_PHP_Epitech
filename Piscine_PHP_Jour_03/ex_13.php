<?php
function my_swap_vars(&$a, &$b)
{
	$c = $a;
	$a = $b;
	$b = $c;	
}
?>