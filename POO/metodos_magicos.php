<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;


    function __construct($nome, $idade){
        echo 'Construtor invocado';
        $this->nome = $nome;
        $this->idade=$idade;
    }

    public function __toString()
    {
        return "<br>{$this->nome} tem {$this->idade} anos.";
    }

    public function __get($atrib){
        echo "Lendo atribututo não declarado: {$atrib}";
    }
    public function __set($atrib, $valor){
        
    }
}

$teste = new Pessoa("Carlos",19);

echo $teste;