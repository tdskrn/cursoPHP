<div class="titulo"> Download</div>

<?php

session_start();

$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo1 = $pastaUpload . $nomeArquivo;
$temp = $_FILES['arquivo']['tmp_name'];
if (move_uploaded_file($temp, $arquivo1)) {
    echo "<br> Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<br> Erro no upload de arquivos";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo" id="">
    <button> Enviar</button>
</form>

<ul>
    <?php foreach ($arquivos as $arquivo) : ?>
        <li>
            <a href="../files/<?= $arquivo ?>">
                <?= $arquivo; ?>
            </a>
            <img src="../files/<?= $arquivo ?>" alt="">
        </li>
    <?php endforeach ?>
</ul>

<style>

    input, button {
        font-size: 1.rem;
    }

    li > a, img {
        margin: 5px;
    }
</style>