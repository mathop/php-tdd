<?php

    namespace Mathop\Chapter2;

    class MaiorEMenor
    {
        private $menor;
        private $maior;

        public function encontra(CarrinhoDeCompras $carrinho)
        {
            foreach ($carrinho->getProdutos() as $produto) {
                if ($this->menor == null || $produto->getValor() < $this->menor->getValor()) {
                    $this->menor = $produto;
                }
                else if ($this->maior == null || $produto->getValor() > $this->maior->getValor()) {
                    $this->maior = $produto;
                }
            }
        }

        public function getMenor()
        {
            return $this->menor;
        }

        public function getMaior()
        {
            return $this->maior;
        }
    }
