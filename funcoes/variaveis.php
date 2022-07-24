<div class="titulo"> Argumentos Variaveis</div>

<?php

function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $num ){
        $soma += $num;
        
    }
    return $soma;
}


echo somaCompleta(2,5,3,10,15,20);