#!/usr/bin/php
<?php

function create_password($password)
{
	$options = [
		'cost' => 14,
	];
	
	$hash = password_hash($password, PASSWORD_BCRYPT, $options);

	if (password_verify($password, $hash))
	{
		echo 'Le mot de passe est valide.';
	}
	else
	{
		echo 'Le mode de passe est invalide !';
	}
}

array_shift($argv);
array_walk($argv, 'create_password');

?>