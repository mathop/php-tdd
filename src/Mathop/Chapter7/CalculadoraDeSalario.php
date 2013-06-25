<?php

    namespace Mathop\Chapter7;

    class CalculadoraDeSalario
    {
        public function calculaSalario(Funcionario $funcionario)
        {
            if ($funcionario->getCargo() == Cargo::DESENVOLVEDOR) {
                if ($funcionario->getSalario() > 3000) {
                    return $funcionario->getSalario() * 0.8;
                }
                return $funcionario->getSalario() * 0.9;
            }
            else if ($funcionario->getCargo() == Cargo::DBA) {
                if ($funcionario->getSalario() < 2500) {
                    return $funcionario->getSalario() * 0.85;
                }
                return $funcionario->getSalario() * 0.75;
            }
        }
    }