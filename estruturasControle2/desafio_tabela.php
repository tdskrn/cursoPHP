<div class="titulo"> Desafio Tabela</div>
<?php
$array = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
];


?>

<table>
    <?php
    foreach ($array as $index => $linha) {
        $style = $index %2 ===1? 'class="azul-tabela"': '';

        echo "<tr {$style}>";
        foreach ($linha as $valor) {
            echo "<td> $valor </td>";
        }
        echo "</tr>";
    }


    ?>
</table>

<style>

    .azul-tabela {
        background-color: blue;
        color: white;
    }
    table {
        border: 2px solid blue;
        border-collapse: collapse;
        margin: 20px 0px;
    }


    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px;
    }


</style>