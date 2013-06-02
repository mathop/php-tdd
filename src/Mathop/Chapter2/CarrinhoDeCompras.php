<?php

    namespace Mathop\Chapter2;

    class CarrinhoDeCompras
    {
        private $produtos = array();

        public function adiciona(Produto $produto)
        {
            $this->produtos[] = $produto;
        }

        public function getProdutos()
        {
            return $this->produtos;
        }
    }
