<?php
class C3PO  // extends  Robot
{
	// attributs
	protected $numeroDeSerie;
	private $name;
	private $type = "droide de protocole";
	static $i = 1;

	// Constructeur
	public function __construct($name)
	{
		// $i = 1;
		$this->name=$name;
		$this->numeroDeSerie = self::$i++;
		echo "Je suis le droide de protocole numéro" . $this->numeroDeSerie . ", enchanté de vous rencontrer ! \n";
	}

	// Methodes
	 public function __set($name, $value)
    {
        $this->$name=$value;
    }
    public function dire($str)
    {
        echo "C3PO no ". $this->numeroDeSerie . " : $str\n";
    }
    public function marcher()
    {
        echo "Je me mets en route, inutile d’insister.\n";
    }
}

function initierProtocole()
{
	$foo = new C3PO("");
	echo "En attente d’interaction utilisateur :\n";
	$fp = fopen("php://stdin", "r");
	$fg = fgets($fp);
	if ($fg == "dire")
	{
		$this -> dire();
	}
	if ($fg == "marcher")
	{
		$this->marcher();
	}
}

$foo = new C3PO("Mabite");
$foo->initierProtocole();
?>
