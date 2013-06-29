<?php

    namespace Mathop\Chapter8;

    class GeradorDeNotaFiscal
    {
        private $acoes = array();
        private $relogio;
        private $tabela;

        public function __construct($acoes = array(), Tabela $tabela)
        {
            if (!is_array($acoes)) {
                if (empty($acoes)) {
                    $acoes = array();
                }
                else {
                    $acoes = array($acoes);
                }
            }

            foreach ($acoes as $acao) {
                if (is_a($acao, 'Mathop\Chapter8\AcaoAposGerarNota')) {
                    $this->acoes[] = $acao;
                }
                else {
                    throw new \InvalidArgumentException('"' . (is_object($acao) ? get_class($acao) : $acao) . '"' . ' não é um objeto válido de ação.');
                }
            }

            $this->tabela = $tabela;
            $this->relogio = new RelogioDoSistema();
        }

        public function gera(Pedido $pedido)
        {
            $nf = new NotaFiscal(
                $pedido->getCliente(),
                $pedido->getValorTotal() * $this->tabela->paraValor($pedido->getValorTotal()),
                $this->relogio->hoje()
            );

            foreach ($this->acoes as $acao) {
                $acao->executa($nf);
            }

            return $nf;
        }
    }
