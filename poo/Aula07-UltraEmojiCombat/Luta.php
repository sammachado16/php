<?php

class Luta {
    //Atributos
    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;
    
    //Métodos Públicos
    public function marcarLuta($l1, $l2){
        if(($l1->getCategoria() === $l2->getCategoria()) && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiante = $l1;
            $this->desafiado = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiante = null;
            $this->desafiado = null;
        }
    }
    
    public function lutar(){
        if($this->aprovada === true) {
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vencedor = random_int(0, 2);
            switch ($vencedor) {
                case 0: //Empate
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //Desafiado vence
                    echo "<p>" . $this->desafiado->getNome() . " vence!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: //Desafiante vence
                    echo "<p>" . $this->desafiante->getNome() . " vence!</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo "Luta não pode acontecer!";
        }
    }
    
    //Métodos Especiais
    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }


}
