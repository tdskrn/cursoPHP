<div class="titulo"> Básico Array</div>

<?php
$lista = array(1, 2, 3.4, 'texto');

echo $lista[2];

echo '<br>';
print_r($lista);

$dados = [
    [
        'nome' => "Roberto",
        "idade" => 26,
        "cidade" => "Bahia"
    ],
    [
        'nome' => "Maria",
        "idade" => 26,
        "cidade" => "Nova York"
    ]
];

print_r($dados);
echo '<br>';
print_r($dados[0]);
echo '<br>';
print_r($dados[1]);