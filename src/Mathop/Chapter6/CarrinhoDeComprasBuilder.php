<?php

    namespace Mathop\Chapter6;

    use Mathop\Chapter5\CarrinhoDeCompras;
    use Mathop\Chapter5\Item;

    require_once('../../../vendor/autoload.php');

    class CarrinhoDeComprasBuilder
    {
        private $carrinho;

        public function __construct()
        {
            $this->carrinho = new CarrinhoDeCompras();
        }

        public function comItens()
        {
            $valores = func_get_args();

            foreach ($valores as $valor) {
                $this->carrinho->adiciona(new Item('Item', 1, $valor));
            }

            return $this;
        }

        public function cria()
        {
            return $this->carrinho;
        }
    }
