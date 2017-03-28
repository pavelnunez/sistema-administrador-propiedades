<?php
/* PropiedadesDireccion Test cases generated on: 2011-11-10 19:51:35 : 1320969095*/
App::uses('PropiedadesDireccion', 'Model');

/**
 * PropiedadesDireccion Test Case
 *
 */
class PropiedadesDireccionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.propiedades_direccion', 'app.propiedad', 'app.propiedades_tipo', 'app.contrato', 'app.excusa', 'app.pago', 'app.direcciones_tipo', 'app.sector', 'app.personas_direccion', 'app.ciudad');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->PropiedadesDireccion = ClassRegistry::init('PropiedadesDireccion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropiedadesDireccion);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
