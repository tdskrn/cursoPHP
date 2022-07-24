<div class="titulo">Desafio 7 erros</div>

<?php

interface Template
{
    function metodo1();
    public function metodo2($param);
}

abstract class ClasseAbstrata implements Template
{
    public function metodo3()
    {
        echo "Estou Funcionando";
    }
    function metodo2($param)
    {
        echo $param;
    }
}

class Classe extends ClasseAbstrata
{
    function metodo1()
    {
        echo 'Exec' . '<br>';
    }


    function __construct($param)
    {
    }
}

$exemplo = new Classe($isso);
$exemplo->metodo3();
