<?php 
function estatisticasNumericas($numeros) 
{ 
    $soma = array_sum($numeros); 
    $media = round($soma / count($numeros)); 
    $maior = max($numeros); 
    $menor = min($numeros); 
 
    sort($numeros); 
    $quantidade = count($numeros); 
 
    if ($quantidade % 2 == 0) { 
        $mediana = ($numeros[$quantidade / 2 - 1] + $numeros[$quantidade / 2]) / 2;
    } else { 
        $mediana = $numeros[floor($quantidade / 2)]; 
    } 
 
    $pares = 0; 
    $impares = 0; 
 
    foreach ($numeros as $numero) { 
        if ($numero % 2 == 0) { 
            $pares++; 
        } else { 
            $impares++; 
        } 
    } 
 
    return [ 
        "soma" => $soma, 
        "media" => $media, 
        "maior" => $maior, 
        "menor" => $menor, 
        "mediana" => $mediana, 
        "pares" => $pares, 
        "impares" => $impares 
    ]; 
} 
 
$numeros = [13, 5, 22, 69, 67, 90, 45]; 
$resultado = estatisticasNumericas($numeros); 
 
echo "Soma: " . $resultado["soma"] . "<br>"; 
echo "Média: " . $resultado["media"] . "<br>"; 
echo "Maior Valor: " . $resultado["maior"] . "<br>"; 
echo "Menor Valor: " . $resultado["menor"] . "<br>"; 
echo "Mediana: " . $resultado["mediana"] . "<br>"; 
echo "Quantidade de Pares: " . $resultado["pares"] . "<br>"; 
echo "Quantidade de Ímpares: " . $resultado["impares"]; 
?>