<?php

function novaConexaoPDO($banco = 'curso_php'){
    $servidor = '127.0.0.1:3120';
    $usuario = 'root';
    $senha = 'root';
    
    try {
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco",
        $usuario, $senha);

        return $conexao;
    } catch(PDOException $e) {
        die('Erro: '. $e->getMessage());
    }
}
novaConexaoPDO();

