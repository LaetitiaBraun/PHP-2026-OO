<?php
class De
{
    // Propriétés
    public readonly int $faces;
    private ?int $dernierLancer = null;

    // Méthodes
    // Constructeur
    public function __construct(int $faceDe = 6)
    {
        $this->faces = $faceDe;
    }

    public function __toString():string
    {
        return (is_null($this->dernierLancer))? "🎲 Dé à {$this->faces} 6 faces (jamais lancé)": "🎲 Dé à 6 faces → {$this->dernierLancer}";
    }

    public function lancer():int
    {
        return $this->dernierLancer = mt_rand(1, $this->faces);
    }
}
?>