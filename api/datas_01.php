<div class="titulo"> Datas #01</div>

<?php
echo time() . '<br>';
echo date('D, d \d\e M \d\e Y ') . '<br>';
echo date('d-M-Y', time()) . '<br>';


$amanha = date('d-M-Y', time() + (24 * 60 * 60));
echo $amanha . '<br>';

$proximaSemana = strtotime('+1 week');

echo date('D d M Y', $proximaSemana) . '<br>';
