<?php
// Dados de exemplo
$dados = array(
    array("id" => 1, "nome" => "Joao", "idade" => 35),
    array("id" => 2, "nome" => "Maria", "idade" => 28),
    array("id" => 3, "nome" => "Pedro", "idade" => 42)
);

// Ordena o array por nome
usort($dados, fn ($a, $b) => strcmp($a['nome'], $b['nome']));

// Exibe o array ordenado
print_r("2 - ");
print_r($dados);
