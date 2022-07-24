<div class="titulo"> Desafio Operadores lógicos</div>

<!--
Dois trabalhos -> terça e quinta!
'Os dois executados -> tv 50 e sorvete
apenas um -> tv 32 e sorvete
nenhum Fica em casa saudavel

-->

<form action="#" method="POST">
    <div>
        <label for="t1"> Trabalho 1 (Terça-Feira): </label>
        <select name="t1" id="t1">
            <option value="1"> Executado</option>
            <option value="0"> Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2"> Trabalho 2 (Quinta-Feira): </label>
        <select name="t2" id="t2">
            <option value="1"> Executado</option>
            <option value="0"> Não Executado</option>
        </select>
    </div>
    <button> Executar</button>
</form>
<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>

<?php
$resposta = '';

$t1 = $_POST['t1'] === '1';
$t2 = $_POST['t2'] === '1';



if ($t1 && $t2) {
    $resposta = 'Vamos comprar a TV 50 e tomar Sorvete';
} else if ($t1 xor $t2) {
    $resposta = 'Vamos comprar a TV 32 e tomer Sorvete';
} else {
    $resposta = 'Deu ruim vamos ficar em casa :(';
}
if($resposta){
    echo $resposta;
}
