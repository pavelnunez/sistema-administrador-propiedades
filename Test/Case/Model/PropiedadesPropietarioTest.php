<?php
/* PropiedadesPropietario Test cases generated on: 2011-11-10 19:42:32 : 1320968552*/
App::uses('PropiedadesPropietario', 'Model');

/**
 * PropiedadesPropietario Test Case
 *
 */
class PropiedadesPropietarioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.propiedades_propietario', 'app.propiedad', 'app.propiedades_tipo', 'app.contrato', 'app.excusa', 'app.pago', 'app.propietario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->PropiedadesPropietario = ClassRegistry::init('PropiedadesPropietario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropiedadesPropietario);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
