<?php

namespace Mathop\Chapter9;

require_once('../../../vendor/autoload.php');

class ProcessadorDeBoletosTest extends \PHPUnit_Framework_TestCase
{
	public function testDeveProcessarPagamentoViaBoletoUnico()
	{
		$processador = new ProcessadorDeBoletos();

		$fatura = new Fatura('Cliente', 150.0);
		$b1 = new Boleto(150.0);
		$boletos = new \ArrayObject([$b1]);

		$processador->processa($boletos, $fatura);

		$this->assertEquals(1, $fatura->getPagamentos()->count());
		$this->assertEquals(150.0, $fatura->getPagamentos()[0]->getValor());
	}

	public function testDeveProcessarPagamentoViaMuitosBoletos()
	{
		$processador = new ProcessadorDeBoletos();

		$fatura = new Fatura('Cliente', 300.0);
		$b1 = new Boleto(100.0);
		$b2 = new Boleto(200.0);
		$boletos = new \ArrayObject([$b1, $b2]);

		$processador->processa($boletos, $fatura);

		$this->assertEquals(2, $fatura->getPagamentos()->count());
		$this->assertEquals(100.0, $fatura->getPagamentos()[0]->getValor());
		$this->assertEquals(200.0, $fatura->getPagamentos()[1]->getValor());
	}
}
