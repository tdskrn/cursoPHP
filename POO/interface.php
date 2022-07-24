<div class="titulo"> Interface</div>

<?php

interface Animal
{
    function respirar();
}

interface Canino
{
    function latir(): string;
}

class Cachorro implements Animal, Canino
{
    function respirar()
    {
       return 'Irei respirar';
    }

    function latir(): string
    {
        return 'Auau';
    }
}

$dog = new Cachorro();
echo $dog ->respirar();
echo '<br>';
echo $dog ->latir();
