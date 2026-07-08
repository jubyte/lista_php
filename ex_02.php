<?php
function inverterTexto($texto)
{
    $textoInvertido = strrev($texto);
    return $textoInvertido;
}

$texto = "gatinho fofo";
echo "Texto Original: $texto <br>";
echo "Quantidade de Caracteres: " . strlen($texto) . "<br><br>";
echo "Texto Invertido: " . inverterTexto($texto);
?>