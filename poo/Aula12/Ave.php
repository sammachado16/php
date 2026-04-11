<?php
require_once 'Animal.php';
class Ave extends Animal {
    private $corPena;
    
    #[\Override]
    public function locomover(){
        echo "<p>Voando</p>";
    }
    #[\Override]
    public function alimentar(){
        echo "<p>Comendo frutas</p>";
    }
    #[\Override]
    public function emitirSom(){
        echo "<p>Som de ave</p>";
    }
    
    public function fazerNinho() {
        echo "<p>Construindo um Ninho</p>";
    }

    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }



}