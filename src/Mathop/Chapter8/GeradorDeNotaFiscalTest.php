<?php

    use Mathop\Chapter8\GeradorDeNotaFiscal;
    use Mathop\Chapter8\Pedido;

    require_once('../../../vendor/autoload.php');

    class GeradorDeNotaFiscalTest extends PHPUnit_Framework_TestCase
    {
        public function testDeveGerarNFComValorDeImpostoDescontado()
        {
            $gerador = new GeradorDeNotaFiscal();
            $pedido = new Pedido('Matheus', 1000, 1);

            $nf = $gerador->gera($pedido);

            $this->assertEquals(1000 * 0.94, $nf->getValor(), 0.00001);
        }
    }
