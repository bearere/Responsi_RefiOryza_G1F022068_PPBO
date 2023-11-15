<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$arrahman = new Person("arrahman", "Yogyakarta");

// tambahkan value nama di object
$arrahman->nama = "arrahman";

// panggil function sayHelloNull dengan parameter
$arrahman->sayHelloNull("Bul");

// buat object dari kelas person
$nabil = new Person("nabil", "Bandung");

// tambahkan value nama di object
$nabil->nama = "nabil";

// panggil function sayHelloNull dengan parameter null
$nabil->sayHelloNull(null);
