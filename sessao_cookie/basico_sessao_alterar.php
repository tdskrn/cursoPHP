<?php
session_start();
print_r($_SESSION);

?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome']?><br>
    <b>Email: </b> <?= $_SESSION['email']?><br>
</p>

<?php
$_SESSION['email']= 'gabrielfilho@gmail.com.br';

?>
<p>
    <a href="basico.php"> Voltar</a>
</p>
<p>
    <a href="basico_limpar.php"> Limpar</a>
</p>