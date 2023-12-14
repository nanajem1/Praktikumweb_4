<?php

include "Models/Profile.php";
include "Controllers/Interested.php";
include "Controllers/Student.php";
include "Traits/Greet.php";

use Controllers\Interested;
use Controllers\Student;

$Interested = new Interested("najem", 23, "Nothing");
echo $Interested->showPersonalInfo() . "<br>";

$Studen = new Student("nana", 23, "Informatics");
echo $Studen->showPersonalInfo() . "<br>";
