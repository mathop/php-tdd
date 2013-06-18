<?php

    use Mathop\Chapter2\CarrinhoDeCompras;
    use Mathop\Chapter2\Produto;
    use Mathop\Chapter2\MaiorEMenor;

    require_once('../../../vendor/autoload.php');

    class TestaMaiorEMenor
    {
        public function __construct()
        {
            $carrinho = new CarrinhoDeCompras();
            $carrinho->adiciona(new Produto('Geladeira', 450.00));
            $carrinho->adiciona(new Produto('Liquidificador', 250.00));
            $carrinho->adiciona(new Produto('Jogo de pratos', 70.00));

            $algoritmo = new MaiorEMenor();
            $algoritmo->encontra($carrinho);

            echo 'O menor produto: ' . $algoritmo->getMenor()->getNome() . PHP_EOL;
            echo 'O maior produto: ' . $algoritmo->getMaior()->getNome() . PHP_EOL;
        }
    }

    new TestaMaiorEMenor();
