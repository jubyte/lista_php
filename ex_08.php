<?php
function ordenarNomes($nomes)
{
    $listaNomes = explode(",", $nomes);
    $listaNomes = array_map("trim", $listaNomes);

    sort($listaNomes);
    return $listaNomes;
}

$nomes = "Julia, Henrique, Guilherme, Beatriz";
$resultado = ordenarNomes($nomes);

echo "Lista Organizada:<br><br>";

foreach ($resultado as $nome) {
    echo $nome . "<br>";
}
?>