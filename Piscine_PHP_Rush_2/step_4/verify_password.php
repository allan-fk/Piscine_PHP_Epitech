<?php

function verify_password($password)
{
	# La variable $hash récupérée via le fichier "creare_password.php".
	$hash = '$2y$17$AEPEeIigmqvkhyBeK6.K2u69hlwudapMvPW2LK3fpuQyD7b9WGpdS';

	# Si le mot de passe correspond au hash alors afficher "valide"...
	if (password_verify($password, $hash))
	{
		echo 'Le mot de passe est valide.';
	}

	# Sinon affichez "invalide".
	else
	{
		echo 'Le mode de passe est invalide !';
	}
}

verify_password("TEST_PASSWORD"); # Appel de la fonction avec la valeur de la variable "$password".

?>