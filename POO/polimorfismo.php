<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida {
    public $peso;
}

class Arroz extends Comida{

}

class Feijao extends Comida{

}

class Sorvete extends Comida{

}

class Pessoa5 {
    public $peso;

    function __construct($peso)
    { $this->peso = $peso;
        
    }

    public function comer(Comida $comida){
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.65;
$c2 = new Sorvete();
$c2->peso = 1.2;
$c3 = new Feijao();
$c3->peso = 2;

$p1 = new Pessoa5(75);

$p1->comer($c1);
$p1->comer($c2);
$p1->comer($c3);
echo $p1->peso;
