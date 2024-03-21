<?php
class Funcionario
{
    private $id;
    private $nome;
    private $salario;

    public function __construct($id, $nome, $salario)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function calcularSalarioAnual()
    {
        // Considerando que um ano tem 12 meses
        $salarioAnual = $this->salario * 12;
        return $salarioAnual;
    }
}

// Exemplo de uso
$funcionario1 = new Funcionario(1, "João", 5000.00);
$funcionario2 = new Funcionario(2, "Maria", 6000.00);

print_r("4 - \n");
echo "Salário anual do funcionário {$funcionario1->getNome()}: R$ " . number_format($funcionario1->calcularSalarioAnual(), 2) . "\n";
echo "Salário anual do funcionário {$funcionario2->getNome()}: R$ " . number_format($funcionario2->calcularSalarioAnual(), 2) . "\n";
