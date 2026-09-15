<?php
// Procédural 0.1
// ── Version 1 : avec un tableau (ce que vous savez déjà faire)
$chanson = [
    'titre' => 'PHP Anthem',
    'artiste' => 'The Coders'
];

echo $chanson['titre'] . ' — ' . $chanson['artiste'] . '<br>';


// OO
// ── Version 2 : avec un objet (la nouveauté)
class Chanson
{
    // propriétés publiques
    // peuvent être lues et modifiées depuis l'extérieur
    // de la classe (instance de classe)
    public string $titre = '';
    public string $artiste = '';
    public int $duree = 0;
}

// instanciation de chanson2 0.2
$chanson2 = new Chanson();
// modification des propriétés publiques
$chanson2->titre = 'PHP Anthem';
$chanson2->artiste = 'The Coders';
$chanson2->duree = 210;

// instanciation de chanson3 0.3
$chanson3 = new Chanson();
// modification des propriétés publiques
$chanson3->titre = 'Boucle infinie';
$chanson3->artiste = 'While Trio';
$chanson3->duree = 240;

// affichage de ses propriétés publiques avec concaténation habituelle
echo $chanson2->titre . ' — ' . $chanson2->artiste . ' ('.$chanson2->duree.' secondes)<br>';
// affichage via la concaténation pour l'OO (pour les propriétées)
echo "$chanson3->titre — $chanson3->artiste ($chanson3->duree secondes)<br>";

// procédural 0.4
echo $chanson['titer'];      // tableau, avec une faute
// OO
echo $chanson2->titer;       // objet, avec la même faute
// Méthode fatale
$chanson2->afficher();       // cette méthode n'existe pas