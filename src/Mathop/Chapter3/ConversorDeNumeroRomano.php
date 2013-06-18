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
            return $this->tabela[$numeroEmRomano];
        }
    }
