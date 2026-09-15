<?php
/*

Procédural

*/

// Un utilisateur représenté par un tableau associatif
$user = [
    'name'  => 'Aline',
    'email' => 'aline@example.com',
];

// Une fonction qui travaille sur ce tableau
// le void indique qu'il n'y a pas de return
function afficherUser(array $user): void
{
    echo $user['name'] . ' (' . $user['email'] . ')';
}

afficherUser($user);

/*

Orienté objet

*/

// création d'une classe, c'est un "usine" a créer des User
class User
{
    // Méthode (fonction) publique appelée lors 
    // d'une instanciation (new)
    public function __construct(
        // promotion de propriétés dans le constructeur 
        // depuis PHP 8.0 => raccouci le code
        // private ne permet qu'à la classe actuelle de 
        // lire et modifier un paramètre
        private string $name,
        private string $email,
    ) {}

    // méthode publique qui va afficher une chaine de caractère
    // void car pas de retour
    public function afficher(): void
    {
        // le $this représente l'objet créé à partie de new User(...)
        // représente l'instance (objet) et pas la classe
        echo $this->name . ' (' . $this->email . ')';
    }
}
echo "<br>";
// instanciation d'un objet de type User
$user = new User('Aline', 'aline@example.com');
$user2 = new User('Yuliia','yuliia@exeple.com');

echo "<br><br>";
$user->afficher();
echo "<br>";
$user2->afficher();

// Impossible car private
// echo $user2->name;

var_dump($user,$user2);