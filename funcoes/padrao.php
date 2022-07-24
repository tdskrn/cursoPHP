<div class="titulo">Argumentos Padrão</div>

<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = "Cliente"){
    return "Bem vindo, $nome $sobrenome! <br>";
}

echo saudacao();