<div class="titulo">Alterar PDO</div>

<?php 
require_once "conexao_pdo.php";

$sql = "UPDATE cadastro
SET nome = ?, nascimento = ?, email = ?,
site = ?, filhos = ?, salario = ?
WHERE id = ?";

$conexao = novaConexaoPDO();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute();