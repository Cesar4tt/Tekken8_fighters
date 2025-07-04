<?php
abstract class Fighter {
    public $nome, $sobrenome, $pais, $aniversario, $style;
    public $forca, $defesa, $esquiva, $velocidade;
    public $img, $descricao;

    public function ataqueComum() {
        echo 'Ataque Comum (20)<br>';
    }

    public function defender() {
        echo 'Defender (50)<br>';
    }

    public function esquivar() {
        echo 'Esquivar (60)<br>';
    }

    abstract public function ataqueEspecial();

    public function __get($atributo) {
        return $this->$atributo;
    }
}

class Kazuya extends Fighter {
    public function __construct() {
        $this->nome = "Kazuya";
        $this->sobrenome = "Mishima";
        $this->pais = "Japão";
        $this->aniversario = "10/10/1958";
        $this->style = "Mishima-Style Fighting Karate";
        $this->forca = 100;
        $this->defesa = 75;
        $this->esquiva = 75;
        $this->velocidade = 75;
        $this->img = "kazuya-full";
        $this->descricao = "Descrição do Kazuya...";
    }

    public function ataqueEspecial() {
        echo 'Fist of the Devil (50)<br>';
        echo 'Devil Fist (70)';
    }
}

class Jin extends Fighter {
    public function __construct() {
        $this->nome = "Jin";
        $this->sobrenome = "Kazama";
        $this->pais = "Japão";
        $this->aniversario = "12/11/1985";
        $this->style = "Traditional Karate";
        $this->forca = 90;
        $this->defesa = 80;
        $this->esquiva = 80;
        $this->velocidade = 90;
        $this->img = "jin-full";
        $this->descricao = "Descrição do Jin...";
    }

    public function ataqueEspecial() {
        echo 'Kazama Fury (60)<br>';
        echo 'Devil Beam (70)';
    }
}
?>