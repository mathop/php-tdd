<?php

    namespace Mathop\Chapter4;

    class CalculadoraDeSalario
    {
        public function calculaSalario(Funcionario $funcionario)
        {
            if ($funcionario->getSalario() > 3000) return 3200.0;
            return 1350.0;
        }
    }