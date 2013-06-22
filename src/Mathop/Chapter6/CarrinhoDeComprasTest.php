<?php

    use Mathop\Chapter5\CarrinhoDeCompras;
    use Mathop\Chapter5\Item;

    require_once('../../../vendor/autoload.php');

    class CarrinhoDeComprasTest extends PHPUnit_Framework_TestCase
    {
        public function testDeveRetornarZeroSeCarrinhoVazio()
        {
            $carrinho = new CarrinhoDeCompras();

            $this->assertEquals(0.0, $carrinho->maiorValor(), '', 0.00001);
        }

        public function testRetornarValorDoItemSeCarrinhoCom1Elemento()
        {
            $carrinho = new CarrinhoDeCompras();
            $carrinho->adiciona(new Item('Geladeira', 1, 900.0));

            $this->assertEquals(900.0, $carrinho->maiorValor(), '', 0.00001);
        }

        public function testDeveRetornarMaiorValorSeCarrinhoContemMuitosElementos()
        {
            $carrinho = new CarrinhoDeCompras();
            $carrinho->adiciona(new Item('Geladeira', 1, 900.0));
            $carrinho->adiciona(new Item('Fogão', 1, 1500.0));
            $carrinho->adiciona(new Item('Máquina de lavar', 1, 750.0));

            $this->assertEquals(1500.0, $carrinho->maiorValor(), '', 0.00001);
        }
    }
