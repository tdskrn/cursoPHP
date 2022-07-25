<div class="titulo"> PDO: Consultar</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexaoPDO();

$sql = "SELECT * FROM cadastro";
// PDO::FETCH_NUM
// PDO::FETCH_ASSOC
// PDO::FETCH_CLASS

$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
print_r($resultado);

echo "<hr>";

$sql = "SELECT * FROM cadastro LIMIT :qtd OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtd', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

if ($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo "<hr>";

$sql = "SELECT * FROM cadastro WHERE id = :id";

$stmt = $conexao->prepare($sql);
//$stmt->bindValue(':id', 14, PDO::PARAM_INT);
if ($stmt->execute([':id'=> 12])) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}
