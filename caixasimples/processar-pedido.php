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
    
    echo "<h1>Nota Fiscal</h1>";
    echo "<p><strong>Nome do Cliente:</strong> " . $nomeCliente . "</p>";
    echo "<p><strong>Total Gasto:</strong> R$ " . number_format($totalGasto, 2, ',', '.') . "</p>";
    echo "<p><strong>Troco:</strong> R$ " . number_format($troco, 2, ',', '.') . "</p>";
}
