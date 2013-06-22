<?php

    namespace Mathop\Chapter5;

    class CarrinhoDeCompras
    {
        private $itens = array();

        public function adiciona(Item $item)
        {
            $this->itens[] = $item;
        }

        public function getItens()
        {
            return $this->itens;
        }
    }
