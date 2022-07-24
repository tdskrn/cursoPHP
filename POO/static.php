<div class="titulo">Membros Estáticos</div>

<?php

class A {
    public $nãoStatic = "Variavel de instância";
    public static $static = "Variável de classe (estática)";

    public function mostrarA(){
        echo "Não estática = {$this->nãoStatic}";

        echo "Estática= " . self::$static . '<br>';
    }

    public static function mostrarStaticA(){
        echo "Estática" . self::$static . '<br>';
    }
}

$objetoA = new A();

A::mostrarStaticA();