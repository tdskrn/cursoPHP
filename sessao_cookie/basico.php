<div class="titulo"> Sessão e Cookies</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'gabriel@gmail.com';
}
?>

<p>
    <a href="/sessao_cookie/basico_sessao_alterar.php">
        Alterar Sessão
    </a>
</p>