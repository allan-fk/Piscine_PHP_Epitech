<?php
class Pony
{
  public $name;
  public $gender;
  public $color;

  public function __construct($name, $gender, $color)
  {
    $this->name = $name;
    $this->gender = $gender;
    $this->color = $name;
  }
  public function __toString()
  // echo string
  {
    return "Don't worry, I'm a pony !\n";
  }

  public function __call($name, $arguments)
  // __call : méthodes inaccessibles dans un contexte objet
  // __callStatic() : méthodes inaccessibles dans un contexte statique.
  {
    echo "I don't know what to do...\n";
  }
  public function __get($name)
  {
	  if (property_exists(get_class($this), $name))
    // Vérifie si un objet ou une classe possède une propriété
		{
		  echo "Ce n'est pas bien de getter un attribut qui est privé !\n";
			return $this->$name;
		}
		else
		echo "Il n'y a pas d’attribut : $name.\n";
  }

  public function __set($name, $value)
  {
		if (property_exists(get_class($this), $name))
	  {
			echo "Ce n'est pas bien de setter un attribut qui est privé !\n";
			$this->$name = $value;
		}
		else
		echo "Il n'y a pas d'attribut : $name.\n";
  }

  public function speak()
  {
    echo "Hiii hiii hiiii\n";
  }

  function __destruct()
  {
    echo "I’m a dead pony.\n";
  }
}
