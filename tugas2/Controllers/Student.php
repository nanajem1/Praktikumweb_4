<?php

namespace Controllers;

use Models\Profile;
use Traits\Greet;

include_once __DIR__ . '/../Traits/Greet.php'; 

class Student extends Profile
{
    use Greet;

    private $department;

    public function __construct($name, $age, $department)
    {
        parent::__construct($name, $age);
        $this->department = $department;
    }

    public function showPersonalInfo()
    {
        return $this->greet() . "my name is $this->name, I am $this->age years old, and I major in $this->department.";
    }
}
