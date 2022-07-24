<div class="titulo"> Laço For</div>

<?php

for ($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo '<hr>';
for (; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo '<hr>';
for (; $cont <= 15;) {
    echo "$cont <br>";
    $cont++;
};

$semana = [
    'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado',
];

print_r($semana);

echo '<br>';
echo '<hr>';

for ($i = 0; $i < count($semana); $i++) {
    echo "{$semana[$i]} <br>";
}

echo '<br>';
echo '<hr>';

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']


];

for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        echo "{$matriz[$i][$j]} ";
    }
    echo '<br>';
}
