<?php

    use Mathop\Chapter2\CarrinhoDeCompras;
    use Mathop\Chapter2\Produto;
    use Mathop\Chapter2\MaiorEMenor;

    require_once('../../../vendor/autoload.php');

    class TestaMaiorEMenor extends PHPUnit_Framework_TestCase
    {
        public function testOrdemDecrescente()
        {
            $carrinho = new CarrinhoDeCompras();
            $carrinho->adiciona(new Produto('Geladeira', 450.00));
            $carrinho->adiciona(new Produto('Liquidificador', 250.00));
            $carrinho->adiciona(new Produto('Jogo de pratos', 70.00));

            $algoritmo = new MaiorEMenor();
            $algoritmo->encontra($carrinho);

            $this->assertEquals('Jogo de pratos', $algoritmo->getMenor()->getNome());
            $this->assertEquals('Geladeira', $algoritmo->getMaior()->getNome());
        }

        public function testOrdemCrescente()
        {
            $carrinho = new CarrinhoDeCompras();
            $carrinho->adiciona(new Produto('Jogo de pratos', 70.00));
            $carrinho->adiciona(new Produto('Liquidificador', 250.00));
            $carrinho->adiciona(new Produto('Geladeira', 450.00));

            $algoritmo = new MaiorEMenor();
            $algoritmo->encontra($carrinho);

            $this->assertEquals('Jogo de pratos', $algoritmo->getMenor()->getNome());
            $this->assertEquals('Geladeira', $algoritmo->getMaior()->getNome());
        }

        public function testApenasUmProduto()
        {
            $carrinho = new CarrinhoDeCompras();
            $carrinho->adiciona(new Produto('Geladeira', 450.00));

            $algoritmo = new MaiorEMenor();
            $algoritmo->encontra($carrinho);

            $this->assertEquals('Geladeira', $algoritmo->getMenor()->getNome());
            $this->assertEquals('Geladeira', $algoritmo->getMaior()->getNome());
        }
    }
