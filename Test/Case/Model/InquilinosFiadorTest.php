<?php
/* InquilinosFiador Test cases generated on: 2011-11-10 20:28:13 : 1320971293*/
App::uses('InquilinosFiador', 'Model');

/**
 * InquilinosFiador Test Case
 *
 */
class InquilinosFiadorTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.inquilinos_fiador', 'app.inquilino', 'app.persona', 'app.sexo', 'app.ec', 'app.profesion', 'app.nacionalidad', 'app.personas_tipo', 'app.fiador', 'app.propietario', 'app.contrato', 'app.propiedad', 'app.propiedades_tipo', 'app.excusa', 'app.pago', 'app.propiedades_propietario', 'app.direccion', 'app.personas_direccion', 'app.telefono', 'app.personas_telefono', 'app.reclamacion', 'app.usuario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->InquilinosFiador = ClassRegistry::init('InquilinosFiador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InquilinosFiador);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
