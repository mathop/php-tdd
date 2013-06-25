<?php

    namespace Mathop\Chapter7;

    class CalculadoraDeSalario
    {
        public function calculaSalario(Funcionario $funcionario)
        {
            if ($funcionario->getSalario() > 3000) {
                return $funcionario->getSalario() * 0.8;
            }
            return $funcionario->getSalario() * 0.9;
        }
    }