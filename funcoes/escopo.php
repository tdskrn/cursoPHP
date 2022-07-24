<div class="titulo"> Função e Escopo</div>

<?php

function imprimirMensagens($msg){
    echo $msg;
}

imprimirMensagens('Ola');
echo '<br>';

$var = 1;


function trocaValor(){
    $var = 2;
    echo "Durante a função: $var <br>";
}

echo "Antes: $var <br>";
trocaValor();
echo "Depois: $var <br>";

echo "<hr>";

function trocaValorVerdade(){
    global $var;
    $var = 3;
    echo "Durante $var <br>";
}

echo "Antes: $var <br>";
trocaValorVerdade();
echo "Depois: $var <br>";