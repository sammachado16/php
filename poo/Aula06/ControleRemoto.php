<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    //Métodos especiais 
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume){
        $this->volume = $volume;
    }

    private function setLigado($ligado){
        $this->ligado = $ligado;
    }

    private function setTocando($tocando){
        $this->tocando = $tocando;
    }

    #[\Override]
    public function abrirMenu() {
        echo "<p><----MENU----></p>";
        echo "<br>Está ligado?: " . ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando?: " . ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10) {
            echo "|";
        }
        echo "<br>";
    }
       
    #[\Override]
    public function fecharMenu() {
        echo "<br>Fechando Menu...";
    }
    
    #[\Override]
    public function ligar() {
        $this->setLigado(true);
    }
    
    #[\Override]
    public function desligar() {
        $this->setLigado(false);
    }

    #[\Override]
    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume()>0) {
            $this->setVolume(0);
        }
    }

    #[\Override]
    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume()==0) {
            $this->setVolume(50);
        }
    }

    #[\Override]
    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }

    #[\Override]
    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }   
    }

    #[\Override]
    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    
    #[\Override]
    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }

}
