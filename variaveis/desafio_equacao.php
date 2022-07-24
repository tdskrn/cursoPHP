<div class="titulo">Desafio Equação</div>

<?php
$parteACima = (6 * (3 + 2)) ** 2;
$parteABaixo = 3 * 2;
$parteBCima = (1 - 5) * (2 - 7);
$parteBBaixo = 2;
$parteC = 10 ** 3;

$resA = $parteACima / $parteABaixo;
$resB = ($parteBCima / $parteBBaixo) ** 2;

echo ($resA - $resB)**3 / 10 ** 3;
