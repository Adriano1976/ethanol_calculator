<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator - Gasoline & Alcohol</title>
    <style>
        @import "../css/Style.css";
    </style>
</head>

<!-- Cabeçalho da página ----------------------------------------------------------->
<header>
    <div class="container">
        <?php
        echo "<h1>Calculator - Gasoline & Alcohol</h1>";
        ?>
    </div>
</header>

<!-- Corpo da página ---------------------------------------------------------------->
<body>
<div class="container">
    <?php
    $name = $_GET['name'];
    $ethanol = $_GET['ethanol'];
    $gasoline = $_GET['gasoline'];
    $astonishment = $_GET['astonishment'];
    $porcentagem = $ethanol / $gasoline;
    $gastoEthanol = $ethanol * $astonishment;
    $gastoGasoline = $gasoline * $astonishment;

    echo "<h2>Tabela de Preços<h2/>";
    ?>

    <?php
    echo "Etanol: R$ $ethanol | ";
    echo "Gasolina: R$ $gasoline <br/>";
    $valueFormat = number_format($porcentagem, 2, ",", ".");
    echo "Diferença percentual (%): $valueFormat <br/>";
    ?>

    <?php
    echo "<h3>Sugestão de Abastecimento<h3/>"
    ?>

    <?php
    echo "<h3>Olá $name, tudo bem? Seja bem vinda! </h3>";
    if ($porcentagem <= 0.70) {
        echo "<h3 class='h3-yes'>Hoje compensa abastecer seu carro com ETANOL. </h3>";

    } elseif ($porcentagem > 0.70 ) {
        echo "<h3 class='h3-no'>Hoje NÃO compensa abastecer seu carro com ETANOL. </h3>";
        echo "<h3>Motivo: A porcentagem está abaixo de 0.70% </h3>";

    } else {
        echo "<h3>Opção Errada. Preencha os campos corretamente. </h3>";
    }

    $gasolineAlcohol = number_format($gastoEthanol, 2, ",", ".");
    echo "<h3>Custo de abastecimento para $astonishment litros: R$ $gastoEthanol</h3>";
    ?>

    <p>
        <a href="../Index.html">
            <input class="form-newsletter__botao" type="reset">
        </a>
    </p>
</div>
</body>

<footer>
    <div class="container">
        <h4>
            &copy;Programação BackEnd I - 2022. │ R.A. 21181021-5 │ Adriano Santos
        </h4>
    </div>
</footer>
</html>
