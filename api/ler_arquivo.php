<div class="titulo">Lendo Arquivos</div>

<?php 
$arquivo = fopen('teste.txt', 'r');

echo fread($arquivo, 10);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo $tamanho, '<br>';

echo fread($arquivo, $tamanho);

fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';


echo '<hr>';

$arquivo = fopen('teste.txt', 'r+');



