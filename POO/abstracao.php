<div class="titulo">Classes abstratas</div>

<?php

abstract class Astral {
    abstract public function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class Filha extends Astral {
    public function metodo1(){
        echo 'Exec';
    }

}

class Neta extends Filha {
    function metodo2($parametro)
    {
        echo "<br>Obrigatório extender aqui";
    }
}

$c = new Neta();
$c->metodo1();
$c->metodo2("Saee");