<?php

use Mathop\Chapter9\ProcessadorDeBoletos;
use Mathop\Chapter9\Fatura;
use Mathop\Chapter9\Boleto;

require_once('../../../vendor/autoload.php');

class ProcessadorDeBoletosTest extends PHPUnit_Framework_TestCase
{
	public function testDeveProcessarPagamentoViaBoletoUnico()
	{
		$processador = new ProcessadorDeBoletos();

		$fatura = new Fatura('Cliente', 150.0);
		$b1 = new Boleto(150.0);
		$boletos = new ArrayObject([$b1]);

		$processador->processa($boletos, $fatura);

		$this->assertEquals(1, count($fatura->getPagamentos()));
		$this->assertEquals(150.0, $fatura->getPagamentos()[0]->getValor());
	}
}
