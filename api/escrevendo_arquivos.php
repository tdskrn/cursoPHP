<div class="titulo"> Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor inicial\n");
$string = "Segunda linha\n";
fwrite($arquivo, $string);
fclose($arquivo);
$string2 = "Lorem ipsum dolor sit amet consectetur adipisicing elit.\n
 Animi voluptatibus alias eum fugit, mollitia accusantium, voluptatem, vel vero \n
 labore iste doloribus cum. Voluptatibus officia totam, tempore sit natus eius dolore?'";
$arquivo = fopen('texte.txt', 'a');
fwrite($arquivo,$string2);