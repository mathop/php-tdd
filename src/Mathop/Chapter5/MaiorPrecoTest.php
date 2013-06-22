<?php

    use Mathop\Chapter5\CarrinhoDeCompras;
    use Mathop\Chapter5\Item;
    use Mathop\Chapter5\MaiorPreco;

    require_once('../../../vendor/autoload.php');

    class MaiorPrecoTest extends PHPUnit_Framework_TestCase
    {
        public function testDeveRetornarZeroSeCarrinhoVazio()
        {
            $carrinho = new CarrinhoDeCompras();

            $algoritmo = new MaiorPreco();
            $valor = $algoritmo->encontra($carrinho);

            $this->assertEquals(0.0, $valor, '', 0.00001);
        }

        public function testRetornarValorDoItemSeCarrinhoCom1Elemento()
        {
            $carrinho = new CarrinhoDeCompras();
            $carrinho->adiciona(new Item('Geladeira', 1, 900.0));

            $algoritmo = new MaiorPreco();
            $valor = $algoritmo->encontra($carrinho);

            $this->assertEquals(900.0, $valor, '', 0.00001);
        }

        public function testDeveRetornarMaiorValorSeCarrinhoContemMuitosElementos()
        {
            $carrinho = new CarrinhoDeCompras();
            $carrinho->adiciona(new Item('Geladeira', 1, 900.0));
            $carrinho->adiciona(new Item('Fogão', 1, 1500.0));
            $carrinho->adiciona(new Item('Máquina de lavar', 1, 750.0));

            $algoritmo = new MaiorPreco();
            $valor = $algoritmo->encontra($carrinho);

            $this->assertEquals(1500.0, $valor, '', 0.00001);
        }
    }
