<?php
/* Propietario Test cases generated on: 2011-11-10 19:58:27 : 1320969507*/
App::uses('Propietario', 'Model');

/**
 * Propietario Test Case
 *
 */
class PropietarioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.propietario', 'app.persona', 'app.contrato', 'app.propiedad', 'app.propiedades_tipo', 'app.excusa', 'app.pago', 'app.propiedades_propietario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Propietario = ClassRegistry::init('Propietario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Propietario);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
