<?php

namespace Mathop\Chapter9;

require_once('../../../vendor/autoload.php');

class FaturaTest extends \PHPUnit_Framework_TestCase
{
    public function testDeveMarcarFaturaComoNaoPagaQuandoCriar()
    {
        $fatura = new Fatura('Cliente', 150.0);

        $this->assertFalse($fatura->isPago());
    }

    public function testDeveMarcarFaturaComoPagaCasoBoletoUnicoPagueTudo()
    {
        $fatura = new Fatura('Cliente', 150.0);
        $pagamento = new Pagamento(150.0, MeioDePagamento::BOLETO);

        $fatura->adicionaPagamento($pagamento);

        $this->assertTrue($fatura->isPago());
    }
}
