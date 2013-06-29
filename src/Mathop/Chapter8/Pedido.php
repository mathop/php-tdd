<?php

    namespace Mathop\Chapter8;

    class Pedido
    {
        private $cliente;
        private $valorTotal;
        private $quantidadeItens;

        public function __construct($cliente, $valorTotal, $quantidadeItens)
        {
            $this->cliente = $cliente;
            $this->valorTotal = $valorTotal;
            $this->quantidadeItens = $quantidadeItens;
        }

        public function getCliente()
        {
            return $this->cliente;
        }

        public function getValorTotal()
        {
            return $this->valorTotal;
        }

        public function getQuantidadeItens()
        {
            return $this->quantidadeItens;
        }
    }
