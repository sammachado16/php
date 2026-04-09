<?php

class Banco {
    
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    //Métodos
    
    public function abrirConta($t) {
       $this->status = true;
       $this->setTipo($t);
       if ($this->tipo === 'cc') {
            $this->saldo = 50;           
        } elseif ($this->tipo === 'cp') {
            $this->saldo = 150;
          } else {
              echo "ERRO! Tipo não identificado!";
          }
    }
    
    public function fecharConta() {
        if ($this->saldo != 0) {
            echo "ERRO! Valor ou débito detectado";
        } else {
            $this->status = false;
        }
    }
    
    public function depositar($valor) {
        if ($this->status === false) {
            echo "ERRO! Conta não está aberta";
        } else {
            $this->saldo = $this->saldo + $valor;
        }
    }
    
    public function sacar($saque) {
        if ($this->status === false){
            echo "ERRO! Conta não está aberta";
        } elseif ($this->saldo < $saque) {
            echo "ERRO! Saldo insuficiente";
        } else {
            $this->saldo = $this->saldo - $saque;
        }
    }
    
    public function pagarMensal() {
        if ($this->tipo === 'cc') {
            $this->saldo = $this->saldo - 12;           
        } else {
            $this->saldo = $this->saldo - 20; 
        }
    }
    
    //Métodos Especiais
    public function __construct($nConta, $d){
        $this->setnumConta($nConta);
        $this->setDono($d);
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    public function getnumConta() {
        return $this->numConta;
    }
    public function setnumConta($nConta) {
        $this->numConta = $nConta;
    }
    
    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($t) {
        $this->tipo = $t;
    }
    
    public function getDono() {
        return $this->dono;
    }
    public function setDono($d) {
        $this->dono = $d;
    }
    
    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($s) {
        $this->saldo = $s;
    }
    
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($st) {
        $this->status = $st;
    }
}
