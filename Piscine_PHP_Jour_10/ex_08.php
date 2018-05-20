<?php
class Dolly
{
  public $animal = 1;
  public $age = 2;
  public $doctor = 2;

  public function __print_inside_attributes()
  {
    foreach ($this as $key => $value)
    {
      echo "$key : $value\n";
    }
  }
}

public function __print_object_attributes($object)
{
  foreach ($object as $key => $value)
  {
    echo "$object : $value\n";
  }
}
