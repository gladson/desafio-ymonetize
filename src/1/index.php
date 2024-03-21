<?php
function inverterPalavras($string)
{
    // Divide a string em palavras, inverte a ordem e junta novamente
    return implode(' ', array_reverse(explode(' ', $string)));
}

// Exemplo de uso
$string = "\n Desenvolvedor Sênior em PHP - 1";
printf(inverterPalavras($string));

// Result for 8.2.13: PHP em Sênior Desenvolvedor
