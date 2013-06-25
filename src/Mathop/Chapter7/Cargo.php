<?php

    namespace Mathop\Chapter7;

    class Cargo
    {
        private $id;
        private $regra;
        private $cargos = array();

        public function __construct()
        {
            $this->cargos['DESENVOLVEDOR'] = array(1, new DezOuVintePorCento());
            $this->cargos['DBA'] = array(2, new QuizeOuVinteCincoPorCento());
            $this->cargos['TESTADOR'] = array(3, new QuizeOuVinteCincoPorCento());
        }

        public function __call($name, $args)
        {
            $name = strtoupper($name);

            if (isset($this->cargos[$name])) {
                list($this->id, $this->regra) = $this->cargos[$name];
                return $this;
            }
            else {
                throw new Exception('Cargo não encontrado.');
            }
        }

        public function getID()
        {
            return $this->id;
        }

        public function getRegra()
        {
            return $this->regra;
        }
    }
