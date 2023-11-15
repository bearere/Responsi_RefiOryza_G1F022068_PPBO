<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person = new Person("Arrahman","Yogyakarta");

// manipulasi properti nama, alamat, negara
$person->nama = "Arrahman";
$person->alamat = "Yogyakarta";
$person->negara = "Turkey";

// menampilkan hasil
echo "nama = {$person->nama}" . PHP_EOL;
echo "<br>alamat = {$person->alamat}" . PHP_EOL;
echo "<br>negara = {$person->negara}" . PHP_EOL;