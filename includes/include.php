<div class="titulo"> Include</div>

<?php
echo 'Executei essa linha do arquivo include<br>';

include('include_arquivo.php');

echo somaInclude(3,8) . '! <br>';

echo "O conteudo da variavel é {$variavelInclude}";