<?php

    namespace Mathop\Chapter8;

    class SAP implements AcaoAposGerarNota
    {
        public function executa(NotaFiscal $nf)
        {
            return true;
        }
    }
