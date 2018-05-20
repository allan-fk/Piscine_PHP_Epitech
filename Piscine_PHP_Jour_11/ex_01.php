<?php
/*
LES EXEPTIONS :
Une exception peut être lancée ("throw") et attrapée ("catch").
Entouré d'un bloc try pour la saisie d'une exception potentielle.
Chaque try = un bloc catch ou finally.
L'objet doit être une instance de la classe Exception
ou une sous-classe de la classe Exception sinon FATAL-ERROR.

CATCH :
Plrs catchs peuvent être utilisés pour attraper les classes d'exceptions.
L'exécution continue après le dernier bloc catch défini dans la séquence.
Les exceptions peuvent être lancées / relancées dans un bloc catch.

Si une exception est lancée, le code suivant le traitement ne sera pas exécuté
et PHP tentera de trouver le premier bloc catch correspondant.
Si une exception n'est pas attrapée = erreur fatale issue "Uncaught Exception"
Indiquant que l'exception n'a pu être attrapée.
A moins que gestionnaire d'exceptions avec la function set_exception_handler().

Depuis PHP 7.1, un block catch peut spécifier plusieurs exceptions avec (|).
Ceci est utile lorsque différentes exceptions de hiérarchies de classes
sont traitées de la même manière.

FINALLY :
En PHP 5.5 et suivant, un bloc finally peut aussi être spécifié après des catch.
Le code du bloc finally sera toujours exécuté après les blocs try et catch,
indépendament qu'une exception a été lancée.

class Manchot
{
  public function __call($method, $arguments)
  // Appel fonctions qui n'existe pas encore
  {
    if (!is_string($arguments))
    {
      throw new Exception('Les paramètres doivent être des strings');
    }
    else
      for ($i=0; $i<5; $i++)
        {
          echo "Vous avez appelé 5 fois la méthode $method, avec les arguments : " , implode(', ',$arguments) . "\n";
        }
  }
}

$george = new Manchot();
$george->voler(2);
?>
*/

try
{
  for ($i=0; $i < 5 ; $i++)
  {
    call_pangolin();
  }
}
catch(Exception $e)
{
  echo $e->getMessage();
}
?>
