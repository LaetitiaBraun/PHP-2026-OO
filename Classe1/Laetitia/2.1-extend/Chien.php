<?php

// Classe étendue de animal
class Chien extends Animal
{

    // 2.4 On va écraser la méthode manger().
    public function manger():string
    {
        // Le self devient Chien plutôt que Animal.
        return "{$this->name} mange sa classe ".self::class.".<br> C'est pas bien!";
    }

    // 2.4 On veut overriding (redéfinir) et non surchargé.
    public function crier():?string
    {
        return "Vient du parent : ". parent::crier()." <br> Par contre le chien peut aboyer car il est redéfini dans la classe ".self::class;
    }

    public function aboyer():string
    {
    return "{$this->name} fait : wouf !";
    }
}
?>