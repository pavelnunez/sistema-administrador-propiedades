<?php
/* Pago Test cases generated on: 2011-11-10 20:33:38 : 1320971618*/
App::uses('Pago', 'Model');

/**
 * Pago Test Case
 *
 */
class PagoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pago', 'app.inquilino', 'app.persona', 'app.sexo', 'app.ec', 'app.profesion', 'app.nacionalidad', 'app.personas_tipo', 'app.fiador', 'app.propietario', 'app.contrato', 'app.propiedad', 'app.propiedades_tipo', 'app.excusa', 'app.propiedades_propietario', 'app.direccion', 'app.personas_direccion', 'app.telefono', 'app.personas_telefono', 'app.reclamacion', 'app.usuario', 'app.inquilinos_fiador');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Pago = ClassRegistry::init('Pago');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pago);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
