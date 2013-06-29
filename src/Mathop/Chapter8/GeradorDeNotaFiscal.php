<?php

    namespace Mathop\Chapter8;

    class GeradorDeNotaFiscal
    {
        private $dao;
        private $sap;

        public function __construct(\NFDao $dao, \SAP $sap)
        {
            $this->dao = $dao;
            $this->sap = $sap;
        }

        public function gera(Pedido $pedido)
        {
            $nf = new NotaFiscal($pedido->getCliente(), $pedido->getValorTotal() * 0.94, new \DateTime());

            $this->dao->persiste($nf);
            $this->sap->envia($nf);

            return $nf;
        }
    }
