<?php

class Movies {
    protected $titolo;
    protected $durata;
    protected $regista;

    public function __construct($_titolo, $_durata, $_regista) {
        $this->titolo = $_titolo;
        $this->durata = $_durata;
        $this->regista = $_regista;
    }

    public function getTitolo(){
        return "{$this->titolo}";
    }
    public function getDurata(){
        return "{$this->durata}";
    }

    public function getRegista(){
        return "{$this->regista}";
    }


}