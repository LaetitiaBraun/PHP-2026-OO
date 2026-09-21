<?php
class Animal
{
    protected ?string $nom = null;


    public function __construct(string $name = 'Anonyme')
    {
        $this->nom = $name;
        echo "Je me nomme ".$this->nom." et je suis de type ".self::class;
    }

        public function manger(): string
    {
        return $this->nom . ' mange délicatement, en laissant la moitié.';
    }
}
?>