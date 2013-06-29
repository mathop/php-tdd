<?php

    namespace Mathop\Chapter8;

    class NFDao implements AcaoAposGerarNota
    {
        public function executa(NotaFiscal $nf)
        {
            return true;
        }
    }
