<div class="titulo">Visibilidade</div>

<?php

class A {
    public $publico = 'Público';
    protected $protegido = "Protegido";
    private $privado = "Privado";

    public function mostrarA(){
        echo "Classe A) Publico = {$this->publico} <br>";
        echo "Classe A) Protegido = {$this->protegido}<br>";
        echo "Classe A) Privado = {$this->privado}<br>";
    }

    private function naoMostrar(){
        echo "Não vou imprimir";
    }
}

$a = new A();
$a->mostrarA();


class B extends A {
    public function mostrarB(){
        echo "Classe B) Publico = {$this->publico}<br>";
        echo "Classe B) Protegido = {$this->protegido}<br>";
        echo "Classe B) Privado = {$this->privado}<br>";
    }
}

$b = new B();
$b->mostrarB();