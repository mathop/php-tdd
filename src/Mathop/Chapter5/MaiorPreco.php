<?php

    namespace Mathop\Chapter5;

    class MaiorPreco
    {
        public function encontra(CarrinhoDeCompras $carrinho)
        {
            $itens = $carrinho->getItens();

            if (count($itens) == 0) return 0;

            $maior = $itens[0]->getValorTotal();

            foreach ($itens as $item)
            {
                if ($maior < $item->getValorTotal()) {
                    $maior = $item->getValorTotal();
                }
            }

            return $maior;
        }
    }
