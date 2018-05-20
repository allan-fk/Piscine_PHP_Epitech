<?php
class MyAttribute
{
  var $name = "";

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function display()
  {
    echo $this->name."\n";
  }
}
// $foo = new MyAttribute("Jean-Luc");
// $foo->display();
?>
