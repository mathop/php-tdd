<?php

    use Mathop\Chapter7\CalculadoraDeSalario;
    use Mathop\Chapter7\Cargo;
    use Mathop\Chapter7\Funcionario;

    require_once('../../../vendor/autoload.php');

    class CalculadoraDeSalarioTest extends PHPUnit_Framework_TestCase
    {
        public function testDeveCalcularSalarioParaDesenvolvedoresComSalarioAbaixoDoLimite()
        {
            $calculadora = new CalculadoraDeSalario();
            $cargo = new Cargo();
            $desenvolvedor = new Funcionario('Matheus', 1500.0, $cargo->desenvolvedor());

            $salario = $calculadora->calculaSalario($desenvolvedor);

            $this->assertEquals(1500.0 * 0.9, $salario, '', 0.00001);
        }

        public function testDeveCalcularSalarioParaDesenvolvedoresComSalarioAcimaDoLimite()
        {
            $calculadora = new CalculadoraDeSalario();
            $cargo = new Cargo();
            $desenvolvedor = new Funcionario('Matheus', 4000.0, $cargo->desenvolvedor());

            $salario = $calculadora->calculaSalario($desenvolvedor);

            $this->assertEquals(4000.0 * 0.8, $salario, '', 0.00001);
        }

        public function testDeveCalcularSalarioParaDBAComSalarioAbaixoDoLimite()
        {
            $calculadora = new CalculadoraDeSalario();
            $cargo = new Cargo();
            $desenvolvedor = new Funcionario('Matheus', 500.0, $cargo->dba());

            $salario = $calculadora->calculaSalario($desenvolvedor);

            $this->assertEquals(500.0 * 0.85, $salario, '', 0.00001);
        }

        public function testDeveCalcularSalarioParaDBAComSalarioAcimaDoLimite()
        {
            $calculadora = new CalculadoraDeSalario();
            $cargo = new Cargo();
            $desenvolvedor = new Funcionario('Matheus', 4500.0, $cargo->dba());

            $salario = $calculadora->calculaSalario($desenvolvedor);

            $this->assertEquals(4500.0 * 0.75, $salario, '', 0.00001);
        }

        public function testDeveCalcularSalarioParaTestadorComSalarioAbaixoDoLimite()
        {
            $calculadora = new CalculadoraDeSalario();
            $cargo = new Cargo();
            $desenvolvedor = new Funcionario('Matheus', 500.0, $cargo->testador());

            $salario = $calculadora->calculaSalario($desenvolvedor);

            $this->assertEquals(500.0 * 0.85, $salario, '', 0.00001);
        }

        public function testDeveCalcularSalarioParaTestadorComSalarioAcimaDoLimite()
        {
            $calculadora = new CalculadoraDeSalario();
            $cargo = new Cargo();
            $desenvolvedor = new Funcionario('Matheus', 4500.0, $cargo->testador());

            $salario = $calculadora->calculaSalario($desenvolvedor);

            $this->assertEquals(4500.0 * 0.75, $salario, '', 0.00001);
        }
    }
