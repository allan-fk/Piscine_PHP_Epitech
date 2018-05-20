<?php
class MyAttributes
{
	private $a = "";
	private $b = "";
  // Attributs privés

	public function __construct($a, $b)
	{
		$this->setA($a);
    // Appel la methode setA
		$this->setB($b);
	}

  public function getA()
  {
		return $this->a;
    // Retourne function = a
  }
  public function setA($a)
  {
    $this->a = $a;
    // Retourne function = $a
  }
  public function getB()
  {
		return $this->b;
  }
  public function setB($b)
  {
    $this->b = $b;
  }

  public function display()
  {
    echo $this->getA()." ".$this->getB()."\n";
    // Affiche methode getA getB
  }
}
// $foo = new MyAttributes("Hello", "World");
// $foo->display();
?>
