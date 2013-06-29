<?php

    namespace Mathop\Chapter8;

    class GeradorDeNotaFiscal
    {
        public function gera(Pedido $pedido)
        {
            return new NotaFiscal($pedido->getCliente(), $pedido->getValorTotal() * 0.94, new \DateTime());
        }
    }