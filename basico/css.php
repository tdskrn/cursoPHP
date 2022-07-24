<div class="titulo">Integração HTML</div>

<h1>
    <?php
    echo 'Olá';
    echo '<small>';
    echo ' Mundo!';
    echo '</small>';
    ?>
</h1>

<?= "<div> Outra forma de me 'expressar'! </div>" ?>
<div center><button dobro class="botao"><?= "Legal" ?> </button></div>

<style>
    button {
        padding: 5px <?= 2 * 10 ?>px;
        background-color: blue;
        color: white;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: blue;
    }

    [dobro] {
        font-size: 2rem;
    }
</style>