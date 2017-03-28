<?php
/* Ec Test cases generated on: 2011-11-10 20:26:58 : 1320971218*/
App::uses('Ec', 'Model');

/**
 * Ec Test Case
 *
 */
class EcTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ec', 'app.persona', 'app.sexo', 'app.profesion', 'app.nacionalidad', 'app.personas_tipo', 'app.fiador', 'app.inquilino', 'app.contrato', 'app.excusa', 'app.pago', 'app.reclamacion', 'app.usuario', 'app.inquilinos_fiador', 'app.propietario', 'app.propiedad', 'app.propiedades_tipo', 'app.propiedades_propietario', 'app.direccion', 'app.personas_direccion', 'app.telefono', 'app.personas_telefono');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Ec = ClassRegistry::init('Ec');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ec);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
