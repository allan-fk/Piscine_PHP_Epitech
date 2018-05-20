<?php
function calc($operation, $nb1, $nb2)
{
	switch($operation)
	{
		case '+':
		return $nb1 + $nb2;
		break;

		case '*':
		return $nb1 * $nb2;
		break;

		case "/":
		return $nb1 / $nb2;
		break;

		case "%":
		return $nb1 % $nb2;
		break;

		case "-":
		return $nb1 - $nb2;
		break;
	}
}
?>