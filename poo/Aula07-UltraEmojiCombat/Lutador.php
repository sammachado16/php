<?php

class Lutador {
    //Atributos
    private $nome;
    private $nacionalidade;
    private $categoria;
    private $idade, $altura, $peso;
    private $vitorias, $empates, $derrotas;
    
    //Métodos    
    public function apresentar(){
        echo "<p>-------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
        echo " veio diretamente de " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "kg";
        echo " medindo " . $this->getAltura() . "cm de altura!";
        echo "<br> Ele tem " . $this->getVitorias() . " vitórias, ";
        echo $this->getEmpates() . " empates e ";
        echo $this->getDerrotas() . " derrotas!";
    }
    
    public function status(){
        echo "<p>-------------------------</p>";
        echo "<p>" . $this->getNome() . " é um " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes, ";
        echo " perdeu " . $this->getDerrotas() . " vezes e " ;
        echo " empatou " . $this->getEmpates() . " vezes";
        }
    
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    public function __construct($no, $na, $id, $al, $pe, $vi, $em, $de) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->empates = $em;
        $this->derrotas = $de;
    }

    
    //Getters e Setters
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }
    
    public function getCategoria() {
        return $this->categoria;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }
    
    private function setCategoria(): void {
        if ($this->peso < 52.2) {
            echo "ERRO! Peso inválido";
        } elseif($this->peso <=70.3){
            $this->categoria = "peso leve";
        } elseif ($this->peso <=83.9){
            $this->categoria = "peso médio";
        } elseif ($this->peso <=120.2){
            $this->categoria = "peso pesado";
        } elseif ($this->peso >120.2){
            echo "ERRO! Peso inválido";
        }
    }
    
    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    public function setEmpates($empates): void {
        $this->empates = $empates;
    }

    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }


}
