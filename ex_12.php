<?php
function analisarProdutos($produtos, $produtoPesquisa)
{
    $produtoCaro = "";
    $produtoBarato = "";
    $maiorPreco = 0;
    $menorPreco = PHP_INT_MAX;
    $totalPrecos = 0;

    foreach ($produtos as $produto => $preco) {

        $totalPrecos += $preco;

        if ($preco > $maiorPreco) {
            $maiorPreco = $preco;
            $produtoCaro = $produto;
        }

        if ($preco < $menorPreco) {
            $menorPreco = $preco;
            $produtoBarato = $produto;
        }
    }

    $mediaPrecos = $totalPrecos / count($produtos);

    if (isset($produtos[$produtoPesquisa])) {
        $pesquisa = "Produto encontrado: $produtoPesquisa - R$ " . $produtos[$produtoPesquisa];
    } else {
        $pesquisa = "Produto não encontrado.";
    }

    return [
        "maisCaro" => $produtoCaro,
        "maisBarato" => $produtoBarato,
        "media" => $mediaPrecos,
        "pesquisa" => $pesquisa
    ];
}

$produtos = [
    "Farinha Láctea" => 25.25,
    "Pinga" => 8.50,
    "Leite" => 3.99,
    "Bala Fini" => 9.90
];

$produtoPesquisa = "Farinha Láctea";
$resultado = analisarProdutos($produtos, $produtoPesquisa);

echo "Produto Mais Caro: " . $resultado["maisCaro"] . "<br>";
echo "Produto Mais Barato: " . $resultado["maisBarato"] . "<br>";
echo "Média dos Preços: R$ " . number_format($resultado["media"], 2, ",", ".") . "<br>";
echo $resultado["pesquisa"];
?>