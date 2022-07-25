<div class="titulo">Alterar PDO</div>

<?php 
require_once "conexao_pdo.php";

$sql = "UPDATE cadastro
SET nome = ?, nascimento = ?, email = ?,
site = ?, filhos = ?, salario = ?
WHERE id = ?";

$conexao = novaConexaoPDO();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Gui',
    '1980-12-12',
    'gui@gui.com.br',
    'http://gui.io',
    1, 
    12000,
    9
]);

if($resultado) {
    echo "Sucesso :)";
} else {
    print_r($stmt->errorInfo());
}