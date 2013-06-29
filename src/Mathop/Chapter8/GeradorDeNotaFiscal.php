<?php

    namespace Mathop\Chapter8;

    class GeradorDeNotaFiscal
    {
        public function gera(Pedido $pedido)
        {
            $nf = new NotaFiscal($pedido->getCliente(), $pedido->getValorTotal() * 0.94, new \DateTime());
            $nfdao = new NFDao();

            $nfdao->persiste($nf);

            return $nf;
        }
    }
