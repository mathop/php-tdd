<?php

    use Mathop\Chapter8\GeradorDeNotaFiscal;
    use Mathop\Chapter8\Pedido;

    require_once('../../../vendor/autoload.php');

    class GeradorDeNotaFiscalTest extends PHPUnit_Framework_TestCase
    {
        public function testDeveGerarNFComValorDeImpostoDescontado()
        {
            $tabela = $this->getMock('Mathop\Chapter8\Tabela', array('paraValor'));

            $tabela->expects($this->once())->method('paraValor')->with(1000)->will($this->returnValue(0.2));

            $gerador = new GeradorDeNotaFiscal(null, $tabela);
            $pedido = new Pedido('Matheus', 1000, 1);

            $nf = $gerador->gera($pedido);

            $this->assertEquals(1000 * 0.2, $nf->getValor(), 0.00001);
        }

        public function testDeveInvocarAcoesPosteriores()
        {
            $tabela = $this->getMock('Mathop\Chapter8\Tabela', array('paraValor'));
            $acao1 = $this->getMock('Mathop\Chapter8\AcaoAposGerarNota', array('executa'));
            $acao2 = $this->getMock('Mathop\Chapter8\AcaoAposGerarNota', array('executa'));

            $acao1->expects($this->once())->method('executa');
            $acao2->expects($this->once())->method('executa');

            $gerador = new GeradorDeNotaFiscal(array($acao1, $acao2), $tabela);
            $pedido = new Pedido('Matheus', 1000, 1);

            $nf = $gerador->gera($pedido);
        }

        public function testDeveConsultarATabelaParaCalcularValor()
        {
            $tabela = $this->getMock('Mathop\Chapter8\Tabela', array('paraValor'));

            $tabela->expects($this->once())->method('paraValor')->with(1000)->will($this->returnValue(0.2));

            $gerador = new GeradorDeNotaFiscal(null, $tabela);
            $pedido = new Pedido('Matheus', 1000, 1);

            $nf = $gerador->gera($pedido);

            $this->assertEquals(1000 * 0.2, $nf->getValor(), 0.00001);
        }
    }
