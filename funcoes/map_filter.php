<div class="titulo"> Map e Filter</div>

<?php

use function PHPSTORM_META\map;

$notas = [5.8,7.3,9.8,6.7];
$notasFinais = array_map('round', $notas);

print_r($notasFinais);

function aprovados($elemento){
    return $elemento >= 7;
}

$apenasAprovados = array_filter($notas, 'aprovados');

print_r($apenasAprovados);