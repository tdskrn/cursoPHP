<div class="titulo"> Argumentos e Retorno</div>

<?php

function soma($a, $b){
    return $a + $b;
}

echo soma(5,3);

// alterando o valor chamando o endereço / referencia afeta a variavel inicial

$teste = 1;

function altera(&$a, $novoValor){
    $a = $novoValor;
}

altera($teste, 15);
echo "<br> $teste";
