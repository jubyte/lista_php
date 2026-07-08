<?php
function analisarTexto($texto)
{
    $palavras = str_word_count($texto);
    $caracteres = strlen($texto);

    $vogais = preg_match_all("/[aeiouAEIOU]/", $texto);
    $consoantes = preg_match_all("/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/", $texto);

    return [
        "palavras" => $palavras,
        "caracteres" => $caracteres,
        "vogais" => $vogais,
        "consoantes" => $consoantes
    ];
}

$texto = "cachorro do kike recebendo carinho da julia";
$resultado = analisarTexto($texto);

echo "Texto: $texto <br><br>";
echo "Quantidade de Palavras: " . $resultado["palavras"] . "<br>";
echo "Quantidade de Caracteres: " . $resultado["caracteres"] . "<br>";
echo "Quantidade de Vogais: " . $resultado["vogais"] . "<br>";
echo "Quantidade de Consoantes: " . $resultado["consoantes"];
?>