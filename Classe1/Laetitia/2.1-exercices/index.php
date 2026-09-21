<?php

require_once "Animal.php";
require_once "Chien.php";
require_once "Chat.php";

spl_autoload_register(function (string $ClassName) {
    $file = $ClassName . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

$animal1 = new Animal();
echo "<br>";
$chien = new Chien('Rex');
echo "<br>";
echo $animal1->manger();
echo "<br>";
echo $chien->crier();
?>