<?php

namespace Mathop\Chapter9;

class Fatura
{
	private $cliente;
	private $valor;
	private $pagamentos;
	private $pago;

	public function __construct($cliente, $valor)
	{
		$this->cliente = $cliente;
		$this->valor = $valor;
		$this->pagamentos = new \ArrayObject();
		$this->pago = false;
	}

	public function getCliente()
	{
		return $this->cliente;
	}

	public function getValor()
	{
		return $this->valor;
	}

	public function getPagamentos()
	{
		return $this->pagamentos;
	}

	public function isPago()
	{
		return $this->pago;
	}

	public function adicionaPagamento(Pagamento $pagamento)
	{
		$this->pagamentos->append($pagamento);

		$valorTotal = 0;

		foreach ($this->pagamentos as $p) {
			$valorTotal += $p->getValor();
		}

		if ($valorTotal >= $this->valor) {
			$this->pago = true;
		}
	}
}
