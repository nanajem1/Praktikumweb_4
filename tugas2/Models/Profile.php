<?php

namespace Models;

abstract class Profile
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function showPersonalInfo();
}
