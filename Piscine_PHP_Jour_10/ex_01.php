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

class Booba extends Warrior
{
  public function represent()
  {
    echo "92\n";
  }
  public function shout()
  {
    echo "Bah bien Morray !";
  }
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
}
// $foo = new Warrior;
// $foo->attack();
?>
