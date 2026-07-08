<?php
function calcularDesconto($valorCompra)

{
    $percentual = 0;

    if ($valorCompra > 1000) {
        $percentual = 30;
    } elseif ($valorCompra > 500) {
        $percentual = 20;
    } elseif ($valorCompra > 100) {
        $percentual = 10;
    }

    $desconto = $valorCompra * ($percentual/100);
    $valorFinal = $valorCompra - $desconto;

    return [
        "valorOriginal" => $valorCompra,
        "percentual" => $percentual,
        "desconto" => $desconto,
        "valorFinal" => $valorFinal
    ];
}

$valorCompra = 1333;
$resultado = calcularDesconto($valorCompra);

echo "Valor da Compra: R$ " . number_format($resultado["valorOriginal"], 2, ",", ".") . "<br>";
echo "Desconto Aplicado: " . $resultado["percentual"] . "%<br>";
echo "Valor do Desconto: R$ " . number_format($resultado["desconto"], 2, ",", ".") . "<br><br>";
echo "Valor Final: R$ " . number_format($resultado["valorFinal"], 2, ",", ".");

?>