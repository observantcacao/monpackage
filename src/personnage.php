<?php
namespace Loukianpltnv\Monpackage;

use Error;

class personnage{
    public function __construct(
        protected string $nom,
        protected int $vie,
        protected string $description,
    ) {
        if ($this->vie < 1) {
            throw new Error("point de vie négatif");
        }
        if (empty($this->$nom)){
            throw new Error("Nom vide");
        }
    }

    public function attaquer(personnage $a){
        $a->vie -= 5;
    }

    public function presenter() : string{
        return "bonjour je suis " . $this->nom . ", et j'ai " . $this->vie . "pv. "; 
    }
}