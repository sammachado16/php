<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    private $titulo;
    private $avalicao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avalicao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    #[\Override]
    public function like() {
        $this->curtidas ++;
    }
    
    #[\Override]
    public function pause() {
        $this->reproduzindo = false;
    }
    
    #[\Override]
    public function play() {
        $this->reproduzindo = true;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAvalicao() {
        return $this->avalicao;
    }

    public function getViews() {
        return $this->views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAvalicao($avalicao): void {
        $this->avalicao = $avalicao;
    }

    public function setViews($views): void {
        $this->views = $views;
    }

    public function setCurtidas($curtidas): void {
        $this->curtidas = $curtidas;
    }

    public function setReproduzindo($reproduzindo): void {
        $this->reproduzindo = $reproduzindo;
    }


}
