<?php

class Animal
{
    // Propriétés
    private string $secret = "j'ai fais semlant de dormir"; // Private ne peut être modifié ou vu dans les enfants sauf si on a créer des getters et setters
    // publique dans Animal.
    protected ?string $name = null; // Protected peut être modifié ou vu dans les enfants.
    // publique dans Animal.

    // Méthodes

    // Constructeur
    public function __construct(string $lulu)
    {
        $this->setName($lulu);
    }

    public function manger():string
    {
        return "{$this->name} mange sa classe ".self::class.".";
    }

    public function crier():?string
    {
        return self::class." Ne peut pas crié.";
    }

    // setter (ou mutator)
    public function setName(string $nom):void
    {
        $nom = strip_tags(trim($nom));
        $longueur = strlen($nom);
        if($longueur < 2)
            throw new Exception("Votre nom est trop court");
        if($longueur > 25)
            throw new Exception("Votre nom est trop long");

        $this->name = $nom;
    }
    // getter
    public function getName():?string
    {
        return $this->name;
    }
}
?>