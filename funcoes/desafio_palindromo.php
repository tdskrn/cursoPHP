<div class="titulo">Desafio Palindromo</div>



<form action="#" method="post">
    <div>
        <label for="palindromo"> Insira a palavra a ser checada</label>
        <input type="text" name="palindromo" value="">
    </div>
    <button> Checar</button>
</form>

<?php
$textoRecebido = strtolower($_POST['palindromo']);
$msgFinal = '';

if($textoRecebido === ''){
    $msgFinal = 'Insira a palavra a ser checada na caixa!';

}else if(strrev($textoRecebido)=== $textoRecebido){
    $msgFinal = "O texto $textoRecebido é um palíndromo.";
} else {
    $msgFinal = " O texto $textoRecebido NÃO é um palíndromo.";
}
echo "$msgFinal";
?>

