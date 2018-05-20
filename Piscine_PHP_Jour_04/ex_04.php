<?php
function print_until(int $max)
{
	if ($max < 0)
	{
		echo "Boulet !\n";
		return false;
	}
	else
	{
		$i = 0;
		while ($i <= $max):
			echo $i . "\n";
			$i++;
		endwhile;
		return true;
	}
}
?>