<?php
function converterTemperatura($valor, $origem, $destino)
{
    if ($origem == $destino) {
        return $valor;
    }

    if ($origem == "C") {
        if ($destino == "F") {
            return ($valor * 9 / 5) + 32;
        }

        if ($destino == "K") {
            return $valor + 273.15;
        }
    }

    if ($origem == "F") {
        if ($destino == "C") {
            return ($valor - 32) * 5 / 9;
        }

        if ($destino == "K") {
            return (($valor - 32) * 5 / 9) + 273.15;
        }
    }

    if ($origem == "K") {
        if ($destino == "C") {
            return $valor - 273.15;
        }

        if ($destino == "F") {
            return (($valor - 273.15) * 9 / 5) + 32;
        }
    }

    return "Escala inválida.";
}

$valor = 67;
$origem = "F";
$destino = "C";

echo "Temperatura: $valor °$origem <br>";
echo "Convertendo para: $destino <br><br>";
echo "Resultado: " . converterTemperatura($valor, $origem, $destino) . " °$destino";
?>