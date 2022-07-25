<div class="titulo"> PDO: Inserir</div>

<?php
require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro 
(nome, nascimento, email, site, filhos, salario)
VALUES(
    'Guilherme',
    '1998-7-21',
    'guidagalera@gmail.com',
    'http://guigalera.com.br',
    0,
    3000
)";

$conexao = novaConexaoPDO();

//print_r(get_class_methods($conexao));

if ($conexao->exec($sql)) {

    $id = $conexao->lastInsertId();

    echo "Novo cadastro com id $id";
} else {
    $conexao->errorCode() . "<br>";
}
