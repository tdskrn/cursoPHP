<div class="titulo">Upload</div>

<?php

print_r($_FILES);
print_r($_POST);
print_r($_GET);

if($_FILES && $_FILES['arquivo']){
    $pastaUpload = 'D:/UploadsTeste/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $temp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($temp, $arquivo)){
        echo '<br> Arquivo válido e enviado com sucesso';
    } else {
        echo "<br> Erro no upload de arquivo!";
    }
}


?>

<form action="#" method="POST"
    enctype="multipart/form-data">
    <input type="file" name="arquivo" id="arquivo">
    <button>Enviar</button>

</form>

  
<style>
    input, button {
        font-size:1.2rem;
    }
</style>