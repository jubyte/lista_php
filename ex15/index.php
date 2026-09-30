<?php
//teste do ex_15.php

require_once "ex_15.php";

$peso = 45;
$altura = 1.63;
$email = "juliabferreirak@email.com";
$senha = gerarSenha(8);
$texto = "Desenvolvimento";
$anoNascimento = 2008;
$valor = 100;
$cotacao = 6.70;
$telefone = "47997339556";
$hora = 13;
$senhaTeste = "gatinhos13!";

echo "BIBLIOTECA DE FUNÇÕES<br><br>";

echo "IMC: " . number_format(calcularIMC($peso, $altura), 2) . "<br>";

echo "Email válido: ";
echo validarEmail($email) ? "Sim" : "Não";
echo "<br>";

echo "Senha aleatória: " . $senha . "<br>";

echo "Quantidade de vogais: " . contarVogais($texto) . "<br>";

echo "Texto invertido: " . inverterTexto($texto) . "<br>";

echo "Idade: " . calcularIdade($anoNascimento) . " anos<br>";

echo "Valor convertido: R$ "
. number_format(converterMoeda($valor, $cotacao), 2, ",", ".") . "<br>";

echo "Telefone formatado: " . formatarTelefone($telefone) . "<br>";

echo "Saudação: " . gerarSaudacao($hora) . "<br>";

echo "Senha forte: ";
echo validarSenhaForte($senhaTeste) ? "Sim" : "Não";
?>