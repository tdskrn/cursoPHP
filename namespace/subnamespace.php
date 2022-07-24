<?php namespace App; ?>
<div class="titulo"> Sub-Namespaces</div>

<?php 
echo __NAMESPACE__ . '<br>';
const constante = 123;

namespace App\Principal;

echo __NAMESPACE__ . '<br>';
const constante = 234;

namespace App\Principal\Especifico;

use const App\constante as AppConstante;
use const App\Principal\constante as PrincipalConstante;

echo __NAMESPACE__ . '<br>';
const constante = 345;

echo constante . '<br>';

echo AppConstante . '<br>';

echo PrincipalConstante . '<br>';
