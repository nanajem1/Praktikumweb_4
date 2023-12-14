<?php

namespace Controllers;

use Models\Profile;
use Traits\Greet;

include_once "Traits/Greet.php";

class Interested extends Profile
{
    use Greet;

    private $hobby;

    public function __construct($name, $age, $hobby)
    {
        parent::__construct($name, $age);
        $this->hobby = $hobby;
    }

    public function showPersonalInfo()
    {
        return $this->greet() . "my name is $this->name, $this->age years old, and I am interested in $this->hobby.";
    }
}
