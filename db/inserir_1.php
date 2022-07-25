
<div class="titulo"> Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
VALUES(
    'Andre',
    '1989-09-02',
    'andre@gmail.com',
    'https://andre.com.br',
    3,
    1212.80
)";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

if($resultado) {
    echo 'Sucesso :)';
} else {
    echo "Error: " . $conexao->error;
}

$conexao->close();

?>

