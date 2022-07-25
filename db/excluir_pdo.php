<div class="titulo">Excluir PDO</div>

<?php
require_once "conexao_pdo.php";

$sql = "DELETE FROM cadastro WHERE id = ?";

$conexao = novaConexaoPDO();
$stmt = $conexao->prepare($sql);

if($stmt->execute([12])){
    echo "Sucesso";
} else {
    echo "Erro :(";
    print_r($stmt->errorInfo());
}