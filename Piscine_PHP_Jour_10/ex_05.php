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
		$this->color = $color;
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
	
	public function speak()
	{
		echo "Hiii hiii hiiii\n";
	}

	public function __destruct()
  {
        echo "I'm a dead pony.\n";
  }
}
?>
