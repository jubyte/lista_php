<?php
function criptografarMensagem($texto)
{
    $original = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $criptografado = "defghijklmnopqrstuvwxyzabcDEFGHIJKLMNOPQRSTUVWXYZABC";

    return strtr($texto, $original, $criptografado);
}

function descriptografarMensagem($texto)
{
    $criptografado = "defghijklmnopqrstuvwxyzabcDEFGHIJKLMNOPQRSTUVWXYZABC";
    $original = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    return strtr($texto, $criptografado, $original);
}

$mensagem = "Estou ficando louca de tanto programar";
$mensagemCriptografada = criptografarMensagem($mensagem);
$mensagemDescriptografada = descriptografarMensagem($mensagemCriptografada);

echo "Mensagem Original: $mensagem <br>";
echo "Mensagem Criptografada: $mensagemCriptografada <br>";
echo "Mensagem Descriptografada: $mensagemDescriptografada";
?>