<?php

    use Mathop\Chapter8\GeradorDeNotaFiscal;
    use Mathop\Chapter8\NFDao;
    use Mathop\Chapter8\Pedido;

    require_once('../../../vendor/autoload.php');

    class GeradorDeNotaFiscalTest extends PHPUnit_Framework_TestCase
    {
        public function testDeveGerarNFComValorDeImpostoDescontado()
        {
            $dao = $this->getMock('NFDao', array('persiste'));

            $gerador = new GeradorDeNotaFiscal($dao);
            $pedido = new Pedido('Matheus', 1000, 1);

            $nf = $gerador->gera($pedido);

            $this->assertEquals(1000 * 0.94, $nf->getValor(), 0.00001);
        }

        public function testDevePersistirNFGerada()
        {
            $dao = $this->getMock('NFDao', array('persiste'));

            $dao->expects($this->once())
                ->method('persiste');

            $gerador = new GeradorDeNotaFiscal($dao);
            $pedido = new Pedido('Matheus', 1000, 1);

            $nf = $gerador->gera($pedido);
        }
    }
