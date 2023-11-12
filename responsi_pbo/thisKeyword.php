<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$dewi = new Person("Dewi", "Musi Rawas");

// tambahkan value nama di object
$dewi->nama = "Dewi";

// panggil function sayHelloNull dengan parameter
$dewi->sayHelloNull("guys");

// buat object dari kelas person
$margiani = new Person("Margiani", "Sumsel");

// tambahkan value nama di object
$margiani->nama = "Margiani";

// panggil function sayHelloNull dengan parameter null
$margiani->sayHelloNull(null);
