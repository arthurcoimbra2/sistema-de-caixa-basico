<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nomeCliente = htmlspecialchars($_POST['nomeCliente']);
    $produto1 = $_POST['produto1'];
    $valor1 = floatval($_POST['valor1']);
    $produto2 = $_POST['produto2'];
    $valor2 = floatval($_POST['valor2']);
    $valorPago = floatval($_POST['valorPago']);

    $totalGasto = $valor1 + $valor2;
    $troco = $valorPago - $totalGasto;
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Nota Fiscal</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <p> <strong>Nota Fiscal</strong>
            <br> Nome do Cliente:<?php echo $nomeCliente; ?>
            <br>Total Gasto: R$ <?php echo number_format($totalGasto, 2, ',', '.'); ?>
            <br>Troco: R$ <?php echo number_format($troco, 2, ',', '.'); ?></p>
    </body>
    </html>
    <?php
}
?>

