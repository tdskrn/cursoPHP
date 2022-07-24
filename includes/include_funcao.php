<div class="titulo">Include Função</div>

<?php
echo "Carregando: include_funcao <br>";

function carregarArquivo(){
    include('include_arquivo.php');

    echo $variavelInclude . '<br>';
    echo somaInclude(2,5) . '<br>';
}

carregarArquivo(); // tem que invocar o metodo para que o include seja de fato carregado
echo somaInclude(1,8);