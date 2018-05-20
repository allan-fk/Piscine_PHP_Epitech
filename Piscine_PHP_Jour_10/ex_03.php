<?php
abstract class Warrior
{
  // une classe abstraite, ne peut être instanciée (créer un objet)
  // Utiliser pour la sureté du programme
  // Pas de __constructeur vue qu'elle ne peut créer d'objet
  // 1 || 1++ méthodes abstraites = class abstraite.
  abstract public function represent();
  // if 0 => ...
  abstract public function shout();

  public function attack()
  {
    echo "I'll kill you, poor noob !\n";
  }
}

class Booba extends Warrior implements GoodManners
{
  public function represent()
  {
    echo "92\n";
  }
  public function shout()
  {
    echo "Bah bien Morray !";
  }
  function say_please()
  {
    echo "S’il-te-plait".GoodManners::END_WORDS."\n";
    // self = Appeler des fonctions static || constant
    // parent =
    // static =
    //  :: = accéder aux membres static / constant
    //       propriétés || méthodes surchargées d'une classe
  }
  function say_thanks()
  {
    echo "Merci".GoodManners::END_WORDS."\n";
  }
  function say_sorry($name)
  {
    echo "Mille excuses, $name".GoodManners::END_WORDS."\n";
  }
  use Singer;
}

class LaFouine extends Warrior
{
  public function represent()
  {
    echo "78\n";
  }
  public function shout()
  {
    echo "Je suis proprietaire !";
  }
  use Singer;
}

interface GoodManners
{
// spécifie quelles méthodes une classe doit implémenter
// sans avoir à définir comment ces méthodes fonctionneront.
// !!! all methode => public !
  public function say_please();
  public function say_thanks();
  public function say_sorry($name);

  // define("END_WORDS",  ", dirais-je.");
  const END_WORDS =  ", dirais-je.";
}

trait Singer
{
  function sing_a_song()
  {
    $trolo = "Trololololololol\n"
    echo $trolo;
    $trola= str_replace("o", "a", $trolo);
    echo $trola;
    $troli= str_replace("a", "i", $trola);
    echo $troli;
  }
}

// $foo = new Booba;
// $foo->say_sorry('yo');
?>
