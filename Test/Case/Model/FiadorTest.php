<?php
/* Fiador Test cases generated on: 2011-11-10 20:23:07 : 1320970987*/
App::uses('Fiador', 'Model');

/**
 * Fiador Test Case
 *
 */
class FiadorTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.fiador', 'app.persona', 'app.sexo', 'app.ec', 'app.profesion', 'app.nacionalidad', 'app.personas_tipo', 'app.inquilino', 'app.contrato', 'app.excusa', 'app.pago', 'app.reclamacion', 'app.usuario', 'app.inquilinos_fiador', 'app.propietario', 'app.propiedad', 'app.propiedades_tipo', 'app.propiedades_propietario', 'app.direccion', 'app.personas_direccion', 'app.telefono', 'app.personas_telefono');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Fiador = ClassRegistry::init('Fiador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fiador);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
