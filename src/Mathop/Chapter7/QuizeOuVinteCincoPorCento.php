<?php

    namespace Mathop\Chapter7;

    class QuizeOuVinteCincoPorCento extends RegraDeCalculo
    {
        protected function porcentagemBase()
        {
            return 0.85;
        }

        protected function porcentagemAcimaDoLimite()
        {
            return 0.75;
        }

        protected function limite()
        {
            return 2500;
        }
    }
