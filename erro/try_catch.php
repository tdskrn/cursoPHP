<div class="titulo">Try/Catch</div>

<?php

try {
    echo intdiv(7, 0);
} catch (Error $e) {
    echo 'Teve um erro aqui <br>';
}


// } catch (Exception $e){
//     echo 'Teve um erro aqui <br>';
// }

try {
    // throw new Exception('   Um erro muito estranho <br>');
    echo intdiv(7, 0);
} catch (DivisionByZeroError $e) {
    echo 'Divisão por zero <br>';
} catch (Throwable $e) {
    echo ' Erro encontrado' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre Executado! <br>';
}


class FaixaEtariaException extends Exception
{
    public function __construct($message, $code = 0, $previous = null)
    {
        echo "Erro personalizado : $message <br>";
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade)
{
    if ($idade < 18) {
        throw new FaixaEtariaException(
            'Ainda está muito longe'
        );
    }

    if($idade > 70) {
        throw new FaixaEtariaException(
            'Já deveria estar aposentado'
        );
    }

    return 70-$idade;
}


echo '<br> <br> <hr> <br> <br>';
$idadesAvalidas = [15,30,60,80];

foreach($idadesAvalidas as $idade){
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
    } catch (FaixaEtariaException $e){
        echo "Não foi possível calcular para $idade anos. <br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
}