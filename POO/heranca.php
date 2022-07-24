<div class="titulo"> Herança</div>

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

    function __destruct()
    {
        echo 'Tchau';
    }

    public function apresentar()
    {
        echo "Nome: {$this->nome}    Idade: {$this->idade}  anos <br>";
    }
}

class Usuario extends Pessoa
{
    public $login;

    function __construct($nome, $idade, $login)
    {
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuário Criado';
    }

    public function apresentar()
    {
        echo " <br> @{$this->login}:";
        parent::apresentar();
    }
}

$u1 = new Usuario('Hallef', 29, 'hlf');



$u1->apresentar();
