<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Nabil Arrahman");
$company->programmer = new BackendProgrammer("Refi Oryza");
$company->programmer = new FrontendProgrammer("Nabila Wijaya");
sayHelloProgrammer(new Programmer("Nabil Arrahman<br>"));
sayHelloProgrammer(new BackendProgrammer("Refi Oryza<br>"));
sayHelloProgrammer(new FrontendProgrammer("Nabila Wijaya<br>"));