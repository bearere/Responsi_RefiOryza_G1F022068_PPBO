<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("arrahman","Yogyarta");

// manipulasi properti nama person
$person1->nama = "arrahman";

// menampilkan hasil
echo "nama = {$person1->nama}" . PHP_EOL;
echo "<br>alamat = {$person1->alamat}" . PHP_EOL;
echo "<br>negara = {$person1->negara}" . PHP_EOL;
