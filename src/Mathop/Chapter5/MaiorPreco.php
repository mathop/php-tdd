<?php

    namespace Mathop\Chapter5;

    class MaiorPreco
    {
        public function encontra(CarrinhoDeCompras $carrinho)
        {
            $itens = $carrinho->getItens();
            if (count($itens) == 0) return 0;
            return $itens[0]->getValorTotal();
        }
    }
