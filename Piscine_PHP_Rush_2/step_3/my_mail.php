<?php

	$d = readline("Veuillez entrer le mail du destinataire :");
			if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $d)){
				readline_add_history($d);
	$s = readline("veuillez mettre un sujet :");
		readline_add_history($s);
	$m = readline("Veuillez entrer un message :");
			readline_add_history("Veuillez ecrire votre msg :");
			
		
		}else{
				return false;
			}
	
