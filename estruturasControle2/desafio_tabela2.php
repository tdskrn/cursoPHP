<div class="titulo"> Desafio Tabela</div>

<form action="#" method="post">

    <div>
        <label for="colunas"> Número de Colunas</label>
        <input type="number" value="0" name="colunas" id="colunas">
    </div>
    <div>
        <label for="linhas"> Número de Linhas</label>
        <input type="number" value="0" name="linhas" id="linhas">
    </div>
    <button>Construir Tabela</button>

</form>

<table>
    <?php
    $linhas = intval($_POST['linhas']);
    $colunas = intval($_POST['colunas']);
    $contColunasTotal = 1;

    for ($contLinhas = 0; $contLinhas < $linhas; $contLinhas++) {
        echo '<tr>';
        for ($contColunas = 0; $contColunas < $colunas;$contColunas++) {
            echo "<td>{$contColunasTotal} </td>";
            $contColunasTotal++;
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