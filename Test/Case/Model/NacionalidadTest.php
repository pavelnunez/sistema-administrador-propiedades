<?php
/* Nacionalidad Test cases generated on: 2011-11-10 20:31:43 : 1320971503*/
App::uses('Nacionalidad', 'Model');

/**
 * Nacionalidad Test Case
 *
 */
class NacionalidadTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.nacionalidad', 'app.persona', 'app.sexo', 'app.ec', 'app.profesion', 'app.personas_tipo', 'app.fiador', 'app.inquilino', 'app.contrato', 'app.excusa', 'app.pago', 'app.reclamacion', 'app.usuario', 'app.inquilinos_fiador', 'app.propietario', 'app.propiedad', 'app.propiedades_tipo', 'app.propiedades_propietario', 'app.direccion', 'app.personas_direccion', 'app.telefono', 'app.personas_telefono');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Nacionalidad = ClassRegistry::init('Nacionalidad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nacionalidad);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
