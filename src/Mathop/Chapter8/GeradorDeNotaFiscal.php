<?php

    namespace Mathop\Chapter8;

    class GeradorDeNotaFiscal
    {
        private $acoes = array();

        public function __construct($acoes = array())
        {
            if (!is_array($acoes)) {
                $acoes = array($acoes);
            }

            foreach ($acoes as $acao) {
                if (is_a($acao, 'Mathop\Chapter8\AcaoAposGerarNota')) {
                    $this->acoes[] = $acao;
                }
                else {
                    throw new \InvalidArgumentException('"' . (is_object($acao) ? get_class($acao) : $acao) . '"' . ' não é um objeto válido de ação.');
                }
            }
        }

        public function gera(Pedido $pedido)
        {
            $nf = new NotaFiscal(
                $pedido->getCliente(),
                $pedido->getValorTotal() * 0.94,
                new \DateTime()
            );

            foreach ($this->acoes as $acao) {
                $acao->executa($nf);
            }

            return $nf;
        }
    }
