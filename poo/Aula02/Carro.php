<?php

class Carro {
    var $modelo;
    var $ano;
    var $cor;
    var $tipo;
    var $batido;
    
    function bateu() {
        $this->batido = true;
    }
    
    function martelinho() {
        $this->batido = false;
    }
    
    function andar() {
        if ($this->batido == true) {
            echo "Não dá pra andar";
        } else {
            echo "Andando normalmente!!";
        }
    }
}
