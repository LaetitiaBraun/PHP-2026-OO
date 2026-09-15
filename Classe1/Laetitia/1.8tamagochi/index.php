<?php
require_once "Tama.php";
$pixel = new Tama('Pixel');
echo $pixel->etat() . "<br>";

$pixel->manger();
echo $pixel->etat() . "<br>";

$pixel->jouer();
echo $pixel->etat() . "<br>";
$pixel->manger();
echo $pixel->etat() . "<br>";
$pixel->manger();
echo $pixel->etat() . "<br>";
$pixel->manger();
echo $pixel->etat() . "<br>";
$pixel->manger();
echo $pixel->etat() . "<br>";
$pixel->manger();
echo $pixel->etat() . "<br>";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1.8 — Le mini-Tamagotchi</title>
</head>
<body>
    <h1>Exercice 1.8 — Le mini-Tamagotchi</h1>
    <p>$pixel = new Tama();</p>
    <p><?php $pixel = new Tama("Pixel");?></p>
    <p>$pixel->manger();</p>
    <p><?php $pixel->manger();?></p>
    <p>$pixel->jouer();</p>
    <p><?php $pixel->jouer();?></p>
    <p>$pixel->etat();</p>
    <p><?php $pixel->etat()."<br>";?></p>
    <p>for ($i=0;$i<10;$i++) {$pixel->manger(); echo $pixel->etat();}</p>
    <p><?php for ($i=0;$i<10;$i++) {$pixel->manger(); echo $pixel->etat()."<br>";}?></p>
    <?php var_dump($pixel); ?>
</body>
</html>