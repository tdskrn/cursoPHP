<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

$p1 = new Pessoa("Vinicius", 25);

print_r($p1);
