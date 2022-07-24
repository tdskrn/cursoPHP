<?php namespace Outro\Nome ; ?>
<div class="titulo">Use as</div>

<?php
echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php');


function soma($a, $b){
    return $a * $b;
}

class Classe{
    public $var;

    function func(){
        echo __NAMESPACE__ . '->'. __CLASS__ . '->' . __METHOD__ . '<br>';
    }
}

use const \Nome\Bem\Grande\constante;
echo constante . '<br>';

use Nome\Bem\Grande as ctx;

echo soma(5,2) . '<br>';
echo ctx\soma(5,6) . '<br>';