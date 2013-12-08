<?php

namespace Mathop\Chapter9;

require_once('../../../vendor/autoload.php');

class ProcessadorDeBoletos
{
	public function processa(\ArrayObject $boletos, Fatura $fatura)
	{
		$boleto = $boletos[0];
		$pagamento = new Pagamento($boleto->getValor(), MeioDePagamento::BOLETO);
		$fatura->getPagamentos()->append($pagamento);
	}
}
