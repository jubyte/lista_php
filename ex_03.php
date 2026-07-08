<?php
function mascararCpf($cpf)
{
    if (strlen($cpf) < 4) {
        return "CPF inválido.";
    }

    $cpfMascarado = str_repeat("*", strlen($cpf) - 4) . substr($cpf, -4);
    return $cpfMascarado;
}

$cpf = "13888138906";

echo "CPF Original: $cpf <br><br>";
echo "CPF Mascarado: " . mascararCpf($cpf);
?> 