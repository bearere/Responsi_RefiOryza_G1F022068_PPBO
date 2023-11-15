<?php

require_once "data/conflict.php";
require_once "data/helper.php";

use data\satu\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;
$conflict = new Conflict("ayok belajar!");
echo $conflict->getMessage();
helpMe();
echo APPLICATION . PHP_EOL;