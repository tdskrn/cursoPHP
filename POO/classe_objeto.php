<div class="titulo">Classe vs Objeto</div>

<?php


class Pessoa  {
    public $nome = "Vinicius";
    public $idade = 25;

    public function apresentar(){
        echo "Nome: {$this->nome}    Idade: {$this->idade} <br>";
    }
};

$pessoa1 = new Pessoa('Vinicius', 35);
$p2 = new Pessoa('Diana', 37);
$p2->nome = "Maria";
$p2->idade = 29;

$pessoa1->apresentar();
$p2->apresentar();