<?php

    namespace Mathop\Chapter7;

    abstract class RegraDeCalculo
    {
        public function calcula(Funcionario $funcionario)
        {
            if ($funcionario->getSalario() > $this->limite()) {
                return $funcionario->getSalario() * $this->porcentagemAcimaDoLimite();
            }
            return $funcionario->getSalario() * $this->porcentagemBase();
        }

        protected abstract function limite();

        protected abstract function porcentagemAcimaDoLimite();

        protected abstract function porcentagemBase();
    }
