<div class="titulo"> Operações</div>


<?php
$dados = [
    'nome' => "jose",
    "idade" => 28
];

$dados2 = [
    "cidade" => "Ipanema",
    "Estado" => "MG"
];

$dadosCompletos = $dados + $dados2; // une os dois arrays

print_r($dadosCompletos);

unset($dadosCompletos['nome']); // remove o valor indicado

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = array_merge($pares, $impares);
sort($decimais);

print_r($decimais);