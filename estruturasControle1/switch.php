<div class="titulo"> Switch</div>

<form action="#" method="post">
    <div>
        <label for="carros"> Selecione a marca: </label>
        <select name="carros" id="carros">
            <option value="luxo">Luxo</option>
            <option value="suv">Suv</option>
            <option value="sedan">Sedan</option>
            <option value="">----</option>
        </select>
    </div>
    <button> Executar</button>
</form>

<?php

$categoria = $_POST['carros'];
$preco = 0.0;
$carro = '';

switch ($categoria) {
    case 'luxo': {
            $carro = 'Mercedes';
            $preco = 250000;
            break;
        }
    case 'suv':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;

    default:
        $carro = 'Mobi';
        $preco = 33000;
}

$preco_formatado = number_format($preco, 2, ',', '.');
echo "O preço do $carro é R$ $preco_formatado";
