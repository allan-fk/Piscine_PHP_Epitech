#!/usr/bin/php
<?php

# /!\ IMPORTANT /!\ : Ce fichier ne réalise pas l'action prévue.
# Je voulais un fichier php qui prendrai un argument via ligne de commande (terminal) et qui en ferait un mot de passe et le hacherait (hash). Dans les faits, je crois bien que cela fonctionne correctement mais en fait c'est inutile dans l'état.

function use_password($password)
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