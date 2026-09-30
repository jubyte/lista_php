<?php
function formatarTexto($texto)
{
    $maiusculo = mb_strtoupper($texto);
    $minusculo = mb_strtolower($texto);
    $primeiraMaiuscula = mb_convert_case($texto, MB_CASE_TITLE);
    $quantidadeLetras = mb_strlen($texto);

    return [
        "maiusculo" => $maiusculo,
        "minusculo" => $minusculo,
        "primeiraMaiuscula" => $primeiraMaiuscula,
        "quantidadeLetras" => $quantidadeLetras
    ];
}

$texto = "Professor Ícaro é top!";
$resultado = formatarTexto($texto);

echo "Texto Original: $texto <br><br>";
echo "Letras Maiúsculas: " . $resultado["maiusculo"] . "<br>";
echo "Letras Minúsculas: " . $resultado["minusculo"] . "<br>";
echo "Primeira Letra Maiúscula: " . $resultado["primeiraMaiuscula"] . "<br>";
echo "Quantidade de Letras: " . $resultado["quantidadeLetras"];
?>