<div class="titulo">Datas #02</div>

<?php

$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$fomratoData3 = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

print_r($agora);

echo '<br>';
setlocale(LC_TIME, 'pt_BR');
echo $agora->format($formatoData1) . '<br>';
