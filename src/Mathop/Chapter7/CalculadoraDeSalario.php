<?php

    namespace Mathop\Chapter7;

    class CalculadoraDeSalario
    {
        public function calculaSalario(Funcionario $funcionario)
        {
            return $funcionario->getCargo()->getRegra()->calcula($funcionario);
        }
    }
