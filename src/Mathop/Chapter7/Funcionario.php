<?php

    namespace Mathop\Chapter7;

    class Funcionario
    {
        private $nome;
        private $salario;
        private $cargo;

        public function __construct($nome, $salario, $cargo)
        {
            $this->nome = $nome;
            $this->salario = $salario;
            $this->cargo = $cargo;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getSalario()
        {
            return $this->salario;
        }

        public function getCargo()
        {
            return $this->cargo;
        }
    }
