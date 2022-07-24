<div class="titulo"> Laço For Each</div>

<?php
$semana = [
    'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado',
];

foreach ($semana as $valor) {
    echo "$valor <br>";
}

echo '<br> <hr>';
foreach ($semana as $index => $valor) {
    echo "$index => $valor <br>";
}

$semana2 = [
    1000 =>'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado',
];
echo '<br> <hr>';
foreach ($semana2 as $index => $valor) {
    echo "$index => $valor <br>";
}
