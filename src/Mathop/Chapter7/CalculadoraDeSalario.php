<?php

    namespace Mathop\Chapter7;

    class CalculadoraDeSalario
    {
        public function calculaSalario(Funcionario $funcionario)
        {
            if ($funcionario->getCargo() == Cargo::DESENVOLVEDOR) {
                return $this->dezOuVintePorCentoDeDesconto($funcionario);
            }
            else if ($funcionario->getCargo() == Cargo::DBA || $funcionario->getCargo() == Cargo::TESTADOR) {
                return $this->quinzeOuVinteCincoPorCentoDeDesconto($funcionario);
            }

            throw new Exception('Funcionário inválido');
        }

        private function quinzeOuVinteCincoPorCentoDeDesconto(Funcionario $funcionario)
        {
            if ($funcionario->getSalario() < 2500) {
                return $funcionario->getSalario() * 0.85;
            }
            return $funcionario->getSalario() * 0.75;
        }

        private function dezOuVintePorCentoDeDesconto(Funcionario $funcionario)
        {
            if ($funcionario->getSalario() > 3000) {
                return $funcionario->getSalario() * 0.8;
            }
            return $funcionario->getSalario() * 0.9;
        }
    }