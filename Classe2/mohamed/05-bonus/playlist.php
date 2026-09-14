<?php

class Playlist
{
    private array $chansons = [];
    public function __construct()
    {
        $this->chansons = [];
    }
    public function ajouter(Chanson $chanson):void{
        array_push($this->chansons, $chanson);
    }
    public function afficher(){
        return $this->chansons;
    }

    public function formaterDuree(int $duree){
        return intdiv($duree, 60);
    }
    public function dureeTotale(){
        
    }
}
