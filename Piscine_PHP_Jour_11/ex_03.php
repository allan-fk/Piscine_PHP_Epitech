<?php
/*
NAMESPACE :
Créé afin de créer 2 constantes, 2 fonctions || 2 classes avec le même nom.

On va s'imaginer votre code PHP représenté sous forme de fichiers.
Chaque constante, fonction et classe représente un fichier.
Si 2 constantes, fonctions ou classes ont le même nom tout plantera.

Le principe est de créer des dossiers avec :
constante, fonction, classe à l'intérieur.
Ainsi, celle-ci pourra s'appeler comme elle le souhaitera
car elle sera dans un dossier à part sans créer de conflit avec les autres.

Comme pour les dossiers, vous pouvez créer
autant de namespace que vous voulez et placer à l'intérieur de chacun
d'entre eux autant d'éléments que vous le souhaitez.

- La déclaration d'un namespace se fait généralement dans un fichier à part.

- Rien ne doit être placé avant.

<?php
    namespace MonNamespace; // Déclaration du namespace.
    // Toutes les constantes, fonctions et classes déclarées ici feront partie 
	// du namespace MonNamespace.
?>

*/

// namespace -> Imperium
namespace Imperium;

class Soldier
{
  // attributs
	private $hp;
	private $attack;
	private $name;

  // Constructeur
	public function __construct($name, $hp=50, $attack=12)
	{
		$this->setHp($hp);
		$this->setAttack($attack);
		$this->setName($name);
	}

  // Getters
	public function getHp()
  {
		return $this->hp;
  }
	public function getAttack()
  {
		return $this->attack;
  }
  public function getName()
  {
		return $this->name;
  }

  // Setters
	public function setHp($hp)
  {
		$this->hp = $hp;
	}
	public function setAttack($attack)
  {
		$this->attack = $attack;
	}
	public function setName($name)
  {
		$this->name = $name;
	}

  // Fonctions
	public function doDamage($obj)
  {
		return $obj->setHp($obj->getHp() - $this->getAttack());
  }
  // réduit les hp par la quantité d’attack du soldat attaquant.
  public function __toString()
  {
    return "$this->name the ". __NAMESPACE__ ." Space Marine : $this->hp HP.";
	}
  // Afficher via echo ...
}

// namespace -> Chaos
namespace Chaos;

class Soldier
{
  // attributs
	private $hp;
	private $attack;
	private $name;

  // Constructeur
	public function __construct($name, $hp = 70, $attack = 12)
	{
		$this->setHp($hp);
		$this->setAttack($attack);
		$this->setName($name);
	}

  // Getters
	public function getHp()
  {
		return $this->hp;
  }
	public function getAttack()
  {
		return $this->attack;
  }
  public function getName()
  {
		return $this->name;
  }

  // Setters
	public function setHp($hp)
  {
		$this->hp = $hp;
	}
	public function setAttack($attack)
  {
		$this->attack = $attack;
	}
	public function setName($name)
  {
		$this->name = $name;
	}

  // Fonctions
	public function doDamage($obj)
  {
		return $obj->setHp($obj->getHp() - $this->getAttack());
  }
  public function __toString()
  {
    return "$this->name the " . __NAMESPACE__ ." Space Marine : $this->hp HP.";
  }
}

/*
$spaceMarine = new \Imperium\Soldier("Gessart");
$chaosSpaceMarine =  new \Chaos\Soldier("Ruphen");
echo $spaceMarine, "\n";
echo $chaosSpaceMarine, "\n";
$spaceMarine −> doDamage($chaosSpaceMarine);
echo $spaceMarine, "\n";
echo $chaosSpaceMarine, "\n";
// Affiche ..
*/
?>
