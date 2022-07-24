<div class="titulo"> Usando Tipos</div>

<?php

function somar1($a, $b)
{
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(1, 2);
echo '<br>';
echo somar1(1.7, 2.5);
echo '<br>';
echo somar1(1, 2);
echo '<br>';

function somar2( $a, $b): int
{
    echo "<span> Somando $a + $b = </span> ";

    return $a + $b;
}

echo somar2(1, 2);
echo '<br>';
echo somar2(1.7, 2.5);
echo '<br>';
echo somar2(1, 2);
echo '<br>';