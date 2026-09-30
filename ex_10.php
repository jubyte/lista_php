<?php
function calcularMedia($notas)
{
    $maiorNota = max($notas);
    $menorNota = min($notas);
    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        "maiorNota" => $maiorNota,
        "menorNota" => $menorNota,
        "media" => $media,
        "situacao" => $situacao
    ];
}

$notas = [8, 3, 10, 6];

$resultado = calcularMedia($notas);

echo "Maior Nota: " . $resultado["maiorNota"] . "<br>";
echo "Menor Nota: " . $resultado["menorNota"] . "<br>";
echo "Média: " . $resultado["media"] . "<br>";
echo "Situação Final: " . $resultado["situacao"];
?>