<?php
function calcularIMC($peso, $altura)
{
    return $peso / ($altura * $altura);
}

function validarEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function gerarSenha($quantidade)
{
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%";
    $senha = "";

    for ($i = 0; $i < $quantidade; $i++) {
        $indice = rand(0, strlen($caracteres) - 1);
        $senha .= $caracteres[$indice];
    }
    return $senha;
}

function contarVogais($texto)
{
    $texto = mb_strtolower($texto);
    $quantidade = 0;

    for ($i = 0; $i < mb_strlen($texto); $i++) {
        if (str_contains("aeiou", $texto[$i])) {
            $quantidade++;
        }
    }
    return $quantidade;
}

function inverterTexto($texto)
{
    return strrev($texto);
}

function calcularIdade($anoNascimento)
{
    return date("Y") - $anoNascimento;
}

function converterMoeda($valor, $cotacao)
{
    return $valor * $cotacao;
}

function formatarTelefone($telefone)
{
    return "(" . substr($telefone, 0, 2) . ") "
        . substr($telefone, 2, 5) . "-"
        . substr($telefone, 7);
}

function gerarSaudacao($hora)
{
    if ($hora < 12) {
        return "Bom dia!";
    } elseif ($hora < 18) {
        return "Boa tarde!";
    } else {
        return "Boa noite!";
    }
}

function validarSenhaForte($senha)
{
    return strlen($senha) >= 8 &&
           preg_match("/[A-Z]/", $senha) &&
           preg_match("/[a-z]/", $senha) &&
           preg_match("/[0-9]/", $senha) &&
           preg_match("/[^a-zA-Z0-9]/", $senha);
}
?>