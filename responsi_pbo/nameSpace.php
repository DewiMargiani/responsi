<?php

// buat namespace
// import data dari conflict
require_once "data/conflict.php";
// buat obeject dari namespace yang di buat
$Conflict1      = new data\satu\Conflict();
$Conflict2      = new data\dua\Conflict();

// import data helper
require_once "data/helper.php";
// tampilkan helper menggunakan echo
echo Helper\APPLICATION . PHP_EOL;
// masukan Helper\helpMe();
Helper\helpMe();
