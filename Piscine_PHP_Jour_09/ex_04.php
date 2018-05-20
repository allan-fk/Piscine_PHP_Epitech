<?php
class MyTinyCalculator
{
	private $a;
	private $b;
	private $result;

	public function __construct($a,$b)
	{
		$this->setA($a);
		$this->setB($b);
	}

	public function getA()
	{
		return $this->a;
  }
    public function getB()
	{
		return $this->b;
  }
    public function getResult()
	{
		return $this->result;
    }
    public function setA($a)
	{
		$this->a = $a;
    }    
    public function setB($b)
	{
		$this->b = $b;
    }
    public function setResult($result)
	{
		return $this->result = $result;
    }
    public function add()
	{
		return $this->setResult($this->getA()+$this->getB());
    }
    public function subtract()
	{
		return $this->setResult($this->getA()-$this->getB());
    }
    public function multiply()
	{
		return $this->setResult($this->getA()*$this->getB());
    }
     public function divide()
	{
		return  $this->setResult($this->getA()/$this->getB());
    }
     public function showResult()
	{
		 return $this->result;
	}
}
?>
