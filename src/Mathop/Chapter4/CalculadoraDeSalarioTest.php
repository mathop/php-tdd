<?php

    use Mathop\Chapter4\CalculadoraDeSalario;
    use Mathop\Chapter4\Cargo;
    use Mathop\Chapter4\Funcionario;

    require_once('../../../vendor/autoload.php');

    class CalculadoraDeSalarioTest extends PHPUnit_Framework_TestCase
    {
        public function testDeveCalcularSalarioParaDesenvolvedoresComSalarioAbaixoDoLimite()
        {
            $calculadora = new CalculadoraDeSalario();
            $desenvolvedor = new Funcionario('Maurício', 1500.0, Cargo::DESENVOLVEDOR);

            $salario = $calculadora->calculaSalario($desenvolvedor);

            $this->assertEquals(1500.0 * 0.9, $salario, 0.00001);
        }

        public function testDeveCalcularSalarioParaDesenvolvedoresComSalarioAcimaDoLimite()
        {
            $calculadora = new CalculadoraDeSalario();
            $desenvolvedor = new Funcionario('Maurício', 4000.0, Cargo::DESENVOLVEDOR);

            $salario = $calculadora->calculaSalario($desenvolvedor);

            $this->assertEquals(4000.0 * 0.8, $salario, 0.00001);
        }
    }
