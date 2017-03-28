<?php
/* Excusa Test cases generated on: 2011-11-10 20:36:21 : 1320971781*/
App::uses('Excusa', 'Model');

/**
 * Excusa Test Case
 *
 */
class ExcusaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.excusa', 'app.inquilino', 'app.persona', 'app.sexo', 'app.ec', 'app.profesion', 'app.nacionalidad', 'app.personas_tipo', 'app.fiador', 'app.propietario', 'app.contrato', 'app.propiedad', 'app.propiedades_tipo', 'app.pago', 'app.propiedades_propietario', 'app.direccion', 'app.personas_direccion', 'app.telefono', 'app.personas_telefono', 'app.reclamacion', 'app.usuario', 'app.inquilinos_fiador');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Excusa = ClassRegistry::init('Excusa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Excusa);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
