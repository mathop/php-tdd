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

        public function maiorValor()
        {
            if (count($this->itens) == 0) return 0;

            $maior = $this->itens[0]->getValorTotal();

            foreach ($this->itens as $item)
            {
                if ($maior < $item->getValorTotal()) {
                    $maior = $item->getValorTotal();
                }
            }

            return $maior;
        }
    }
