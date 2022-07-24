<div class="titulo">Classe Final</div>

<?php

abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2(){
        echo 'Não vou mudar';
    }

}

class Classe extends Abstrata {
    function metodo1()
    {
        
    }
}

final class Unica {
    public $att;
}

//class Duplicata extends Unica{}


$class = new Classe('');
$class->metodo1();
$class->metodo2();
