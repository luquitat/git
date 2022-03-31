<?php

use PHPUnit\Framework\TestCase;
use src\Libraries\MathLib;

class MathLibTest extends TestCase {

	private $ob;

	public function setUp(): void
	{
		$this->ob = new MathLib;
	}

	public function test_debe_sumar_dos_numeros_positivos(): void
	{
		$this->assertEquals(12, $this->ob->sumarNaturales(7,5));
	}
}