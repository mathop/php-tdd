<?php

namespace Mathop\Chapter9;

class Fatura
{
	private $cliente;
	private $valor;
	private $pagamentos;

	public function __construct($cliente, $valor)
	{
		$this->cliente = $cliente;
		$this->valor = $valor;
		$this->pagamentos = new \ArrayObject();
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
}
