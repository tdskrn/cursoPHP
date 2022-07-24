<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9); // por padrao são definidas por letra maiuscula
echo TAXA_DE_JUROS;

const NOVA_TAXA = 5.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;

const NOVISSIMA_TAXA = 2.8 +1.2;
echo '<br>' . NOVISSIMA_TAXA;

define('CONSTANTE', $valorVariavel);

echo '<br>' . CONSTANTE;

