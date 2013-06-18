<?php

    namespace Mathop\Chapter3;

    class ConversorDeNumeroRomano
    {
        private $tabela = array
        (
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        );

        public function converte($numeroEmRomano)
        {
            $acumulador = 0;
            $ultimoVizinhoDaDireita = 0;

            for ($i = strlen($numeroEmRomano) - 1; $i >= 0; $i--) {

                $atual = $this->tabela[$numeroEmRomano[$i]];
                $multiplicador = 1;

                if ($atual < $ultimoVizinhoDaDireita) {
                    $multiplicador = -1;
                }

                $acumulador += $this->tabela[$numeroEmRomano[$i]] * $multiplicador;
                $ultimoVizinhoDaDireita = $atual;
            }

            return $acumulador;
        }
    }
