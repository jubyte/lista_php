<?php
function analisarNumero($numero)

{
    $parOuImpar = ($numero % 2 == 0) ? "Par" : "Ímpar";
    $primo = true;

    if ($numero <= 1) {
        $primo = false;
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $primo = false;
                break;
            }
        }
    }

    $somaDivisores = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }

    $perfeito = ($somaDivisores == $numero) ? "Sim" : "Não";

    return [
        "parOuImpar" => $parOuImpar,
        "primo" => $primo ? "Sim" : "Não",
        "perfeito" => $perfeito
    ];
}

$numero = 13;
$resultado = analisarNumero($numero);

echo "Número: $numero <br><br>";
echo "Par ou Ímpar: " . $resultado["parOuImpar"] . "<br>";
echo "Primo: " . $resultado["primo"] . "<br>";
echo "Perfeito: " . $resultado["perfeito"];
?>