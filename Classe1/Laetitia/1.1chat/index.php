<?php
// Appel de la classe
require_once "Chat.php";

// On instancie un chat, attends 2 arguments dès la création du constructeur 1.4
$chat = new Chat("Tom",5);

// Affichage de propriétés publiques
echo "Nom : $chat->nom | Age : $chat->age<br>";

// Les propriétés publiques sont modifiables depuis l'exterieur de la classe
$chat->nom = "Félix";
$chat->age = 3;

echo "Nom : $chat->nom | Age : $chat->age<br>";

// Appel d'une méthode publique
echo "Nom : $chat->nom | Age : $chat->age | fait : {$chat->miauler()}<br>";

// Appel d'une autre méthode publique qui affiche des propriétés
echo $chat->sePresenter()."<br>";

// 1.4
$chat2 = new Chat(
    age:4,
    nom:"Jacques"
);

echo $chat2->sePresenter()."<br>";
?>