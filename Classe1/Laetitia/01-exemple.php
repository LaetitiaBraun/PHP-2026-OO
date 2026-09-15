<?php

// La classe est écrite en PascalCase elle n'est pas un objet en tant que tel mais pluôt une fabrique à créer des objets.
Class MyFirstClass{
    // Propriétés (variables de la classe), plus souvant en camelCase
        // publique (accessible et modifiable en dehors de la classe)
        public string $name ='';
        // private (accessible et modifiable uniquement dans la classe ou son instance)
        private string $surName='';
        // protected (accessible et modifiable uniquement dans la classe ou son instance ET/OU dans ses enfants => "héritage")
        protected ?int $identifiant = null; // null ou int ?int

    // Constantes (conteneurs invariables de la classe)
        const IS_ALIVE = true; // Par défaut publique, typage autorisé à partir de PHP 8.3


    // Méthodes (fonctions de la classe)
        // Constructeur => passer des arguments à l'instance de classe et est toujours publique et utilise la méthode magique __construct(arg)
        // Est invoqué lors de l'instanciation (new)
        public function __construct()
        {
            // self::class représente le nom de la classe, donc de la fabrique
            echo "On a créer une instance de ".self::class;
        }

        // Méthode publique
        public function methodePublique():string
        {
            // on peut l'utiliser pour afficher ou modifier les propriétés
            // Modifications des propriétés
            $this->name = "Pitz";
            $this->surName = "Michaël";
            $this->identifiant = mt_rand(1000000, 9999999);

            // Affichage de celle-ci (get)
            return $this->name." ".$this->surName. " a comme identifiant ".$this->identifiant. " et commence à avoir faim";
        }
}

// Instanciation de $first
$first = new MyFirstClass();
echo "<hr>";
// Appel d'une constance de classe
// echo $first::IS_ALIVE; // partir de l'instance n'est pas recommandé
echo MyFirstClass::IS_ALIVE;
echo "<hr>";
echo $first->methodePublique();
echo "<hr>";
var_dump($first);

?>