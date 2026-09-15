<?php
require_once "Tama.php";
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
    <h2>Bonus 1, entre 0 et 100</h2>
    <p>for ($i=0;$i<10;$i++) {$pixel->jouer(); echo $pixel->etat();}</p>
    <p><?php for ($i=0;$i<10;$i++) {$pixel->jouer(); echo $pixel->etat()."<br>";}?></p>
    <p>for ($i=0;$i<10;$i++) {$pixel->manger(); echo $pixel->etat();}</p>
    <p><?php for ($i=0;$i<10;$i++) {$pixel->manger(); echo $pixel->etat()."<br>";}?></p>
    <h2>Bonus 2, le __toString()</h2>
    <p>echo $pixel</p>
    <p><?= $pixel ?></p>

    <?php var_dump($pixel); ?>
</body>
</html>