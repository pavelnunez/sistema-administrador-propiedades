<?php
/* Propiedad Test cases generated on: 2011-11-10 19:09:11 : 1320966551*/
App::uses('Propiedad', 'Model');

/**
 * Propiedad Test Case
 *
 */
class PropiedadTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.propiedad', 'app.propiedades_tipo', 'app.contrato', 'app.excusa', 'app.pago');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Propiedad = ClassRegistry::init('Propiedad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Propiedad);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
