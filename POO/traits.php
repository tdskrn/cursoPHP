<div class="titulo"> Traits</div>

<?php

trait validacao {
    public function validarString($str){
        return isset($str) && $str !== '';
    }

}

// trait::nomeTrait insteadOf outraTrait;

trait validacaoMelhor {
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}

class Usuario3 {
    use validacao, validacaoMelhor;
}

$user = new Usuario3();
var_dump($usuario->validarString(''));
echo '<br>';
var_dump($usuario->validarStringMelhor('  '));
echo '<br>';
