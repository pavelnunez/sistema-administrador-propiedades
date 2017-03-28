<?php
/* PersonasDireccion Test cases generated on: 2011-11-10 19:53:50 : 1320969230*/
App::uses('PersonasDireccion', 'Model');

/**
 * PersonasDireccion Test Case
 *
 */
class PersonasDireccionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.personas_direccion', 'app.persona', 'app.direcciones_tipo', 'app.sector', 'app.propiedades_direccion', 'app.propiedad', 'app.propiedades_tipo', 'app.contrato', 'app.excusa', 'app.pago', 'app.ciudad');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->PersonasDireccion = ClassRegistry::init('PersonasDireccion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PersonasDireccion);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
