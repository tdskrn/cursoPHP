<div class="titulo"> Operadores Relacionais</div>
<style>
    hr {
        margin-bottom: 10px;
    }
</style>
<?php

// var_dump(1 == 1);
// var_dump(1 > 1);
// var_dump(1 >= 1);
// var_dump(1 < 3);
// var_dump(1 <= 7);
// var_dump(1 != 1);

var_dump(1 === '1');

echo '<hr>';

echo '<p>Spaceship</p><hr>';

var_dump(500 <=> 3);
var_dump(3 <=> 3);
var_dump(1 <=> 3);
