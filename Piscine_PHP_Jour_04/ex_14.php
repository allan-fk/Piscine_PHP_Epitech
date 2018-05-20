<?php
function goto_is_evil()
{
	$i = 0;	
	
	test:

	$i++;
	echo "wac" . "\n";

	if ($i < 42)
	{
		goto test;
	}
}
?>