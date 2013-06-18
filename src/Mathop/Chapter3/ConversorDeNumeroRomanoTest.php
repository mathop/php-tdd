<?php

    require_once('../../../vendor/autoload.php');

    class ConversorDeNumeroRomanoTest extends PHPUnit_Framework_TestCase
    {
        public function testDeveEntenderOSimboloI()
        {
            $romano = new ConversorDeNumeroRomano();
            $numero = $romano->converte('I');
            $this->assertEquals(1, $numero);
        }
    }
