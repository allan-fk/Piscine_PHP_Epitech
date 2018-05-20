<?php
function print_status(int $age)
{
	if ($age >= 18)
	{
	echo "Vous pouvez entrer !", "\n";
	}

	else 
	{	
	echo "Site interdit aux mineurs.", "\n";
	}
}
?>