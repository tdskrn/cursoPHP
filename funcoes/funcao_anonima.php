<div class="titulo"> Função Anônima</div>

<?php

$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1, 2) . '<br>';

function executar($a, $b, $op, $funcao)
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

echo executar(2, 3, '+', $soma);

echo executar(5,2,'-',function ($n1, $n2){ return $n1 - $n2;});
