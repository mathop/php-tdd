<?php

    use Mathop\Chapter6\Calculadora;

    require_once('../../../vendor/autoload.php');

    class CalculadoraTest extends PHPUnit_Framework_TestCase
    {
        private $calculadora;

        public function __construct()
        {
            $this->calculadora = new Calculadora();
        }

        public function testSomaComDoisNumerosPositivos()
        {
            $this->assertEquals(0, $this->calculadora->soma(0, 0));
            $this->assertEquals(2, $this->calculadora->soma(1, 1));
            $this->assertEquals(30, $this->calculadora->soma(10, 20));
            $this->assertEquals(30, $this->calculadora->soma(20, 10));
            $this->assertEquals(30.30, $this->calculadora->soma(10.20, 20.10));
            $this->assertEquals(30.30, $this->calculadora->soma(20.10, 10.20));
        }

        public function testSomaComNumeroPositivoENegativo()
        {
            $this->assertEquals(0, $this->calculadora->soma(0, -0));
            $this->assertEquals(1, $this->calculadora->soma(2, -1));
            $this->assertEquals(-10, $this->calculadora->soma(10, -20));
            $this->assertEquals(10, $this->calculadora->soma(20, -10));
            $this->assertEquals(-9.9, $this->calculadora->soma(10.20, -20.10));
            $this->assertEquals(9.9, $this->calculadora->soma(20.10, -10.20));
        }

        public function testSomaComNumeroNegativoEPositivo()
        {
            $this->assertEquals(0, $this->calculadora->soma(-0, 0));
            $this->assertEquals(1, $this->calculadora->soma(-1, 2));
            $this->assertEquals(-10, $this->calculadora->soma(-20, 10));
            $this->assertEquals(10, $this->calculadora->soma(-10, 20));
            $this->assertEquals(-9.9, $this->calculadora->soma(-20.10, 10.20));
            $this->assertEquals(9.9, $this->calculadora->soma(-10.20, 20.10));
        }

        public function testSomaComDoisNumerosNegativos()
        {
            $this->assertEquals(0, $this->calculadora->soma(-0, -0));
            $this->assertEquals(-2, $this->calculadora->soma(-1, -1));
            $this->assertEquals(-30, $this->calculadora->soma(-10, -20));
            $this->assertEquals(-30, $this->calculadora->soma(-20, -10));
            $this->assertEquals(-30.3, $this->calculadora->soma(-10.20, -20.10));
            $this->assertEquals(-30.3, $this->calculadora->soma(-20.10, -10.20));
        }

        public function testSomaComUmNumeroZero()
        {
            $this->assertEquals(10, $this->calculadora->soma(10, 0));
            $this->assertEquals(10, $this->calculadora->soma(0, 10));
            $this->assertEquals(-10, $this->calculadora->soma(-10, 0));
            $this->assertEquals(-10, $this->calculadora->soma(0, -10));
        }
    }
