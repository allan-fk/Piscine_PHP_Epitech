<?php
function colle($x, $y)
{
	if ($x > 1)
	{
		echo "o";
		for ($i = 2; $i < $x; $i++)
		{
			echo "-";
		}
	}
	echo "o\n";
	
	for ($j = 2; $j < $y; $j++)
	{
		if ($x > 1)
		{
			echo "|";
			for ($i = 2; $i < $x; $i++)
			{
				echo " ";
			}
		}
		
		echo "|\n";
	}

	if ($y > 1)
	{
		if ($x > 1)
		{
			echo "o";
		}

		for ($i = 2; $i < $x; $i++)
		{
			echo "-";
		}
		echo "o\n";
	}
}
?>