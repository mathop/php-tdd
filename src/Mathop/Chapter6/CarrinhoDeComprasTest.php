<?php

    use Mathop\Chapter5\CarrinhoDeCompras;
    use Mathop\Chapter5\Item;

    require_once('../../../vendor/autoload.php');

    class CarrinhoDeComprasTest extends PHPUnit_Framework_TestCase
    {
        private $carrinho;

        public function __construct()
        {
            $this->carrinho = new CarrinhoDeCompras();
        }

        public function testDeveRetornarZeroSeCarrinhoVazio()
        {
            $this->assertEquals(0.0, $this->carrinho->maiorValor(), '', 0.00001);
        }

        public function testRetornarValorDoItemSeCarrinhoCom1Elemento()
        {
            $this->carrinho->adiciona(new Item('Geladeira', 1, 900.0));

            $this->assertEquals(900.0, $this->carrinho->maiorValor(), '', 0.00001);
        }

        public function testDeveRetornarMaiorValorSeCarrinhoContemMuitosElementos()
        {
            $this->carrinho->adiciona(new Item('Geladeira', 1, 900.0));
            $this->carrinho->adiciona(new Item('Fogão', 1, 1500.0));
            $this->carrinho->adiciona(new Item('Máquina de lavar', 1, 750.0));

            $this->assertEquals(1500.0, $this->carrinho->maiorValor(), '', 0.00001);
        }
    }
