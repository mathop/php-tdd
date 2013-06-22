<?php

    use Mathop\Chapter6\CarrinhoDeComprasBuilder;
    use Mathop\Chapter5\Item;

    require_once('../../../vendor/autoload.php');

    class CarrinhoDeComprasBuilderTest extends PHPUnit_Framework_TestCase
    {
        private $builder;

        public function __construct()
        {
            $this->builder = new CarrinhoDeComprasBuilder();
        }

        public function testCarrinhoSemItens()
        {
            $carrinho = $this->builder->comItens()->cria();

            $this->assertEquals(array(), $carrinho->getItens());
        }

        public function testCarrinhoComUmItem()
        {
            $carrinho = $this->builder->comItens(200.0)->cria();

            $expected = array(
                new Item('Item', 1, 200.0)
            );

            $this->assertEquals($expected, $carrinho->getItens());
        }

        public function testCarrinhoComVariosItens()
        {
            $carrinho = $this->builder->comItens(199.90, 550.30, 1000)->cria();

            $expected = array(
                new Item('Item', 1, 199.90),
                new Item('Item', 1, 550.30),
                new Item('Item', 1, 1000)
            );

            $this->assertEquals($expected, $carrinho->getItens());
        }
    }
