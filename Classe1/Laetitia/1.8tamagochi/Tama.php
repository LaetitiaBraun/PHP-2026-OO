<?php
class Tama
{
        // Propriétés
        private string $nom;
        private int $faim = 50;

        // Constantes
        private const int FAIM_MINIMUM = 0;
        private const int FAIM_MAXIMUM = 100;

        // méthodes

        // Constructeur appelé avec le mot clef new avec passage d'un argument
        public function __construct(string $name)
    {
        // Pour modifier la proriété $nom
        $this->nom = $name;
    }

    // Si on veut représenter une instance de cette classe-avec un echo ou un print
        public function __toString():string
    {
        return "Je me nomme {$this->nom} et je suis une instance de ".self::class;
    }

        public function manger():void
    {
        $this->faim = $this->borner($this->faim - 20);
    }

        public function jouer():void
    {
       $this->faim = $this->borner($this->faim + 15);
    }

        public function etat():string
    {
        $txt ="";
        if($this->faim===self::FAIM_MAXIMUM)
            $txt = " Je suis repu(e)";
        elseif($this->faim===self::FAIM_MINIMUM)
            $txt = " J'ai faim!!";
        return "🐣 ".$this->nom." Pixel a une faim de ".$this->faim."/".self::FAIM_MAXIMUM."$txt";
    }

        private function borner(int $valeur):int
    {
        // Max prend la valeur la plus grande entre 0 et (-5 choisis 0) min prend la valeur la plus petite entre 100 et notre $valeur (105 choisis 100) combiné : entre 0 et 100.
        return max(self::FAIM_MINIMUM, min(self::FAIM_MAXIMUM, $valeur));
    }
}
?>