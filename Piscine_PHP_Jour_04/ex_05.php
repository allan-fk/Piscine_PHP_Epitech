<?php
function print_range(int $min)
{
	do
	{
        	echo $min . "\n";
        	$min++;
	}
	while($min <= 42);

	switch ($min)
	{
		case 42:
			return true;
			break;
	}
}
?>