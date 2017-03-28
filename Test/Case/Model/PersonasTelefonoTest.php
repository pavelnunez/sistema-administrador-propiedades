<?php
/* PersonasTelefono Test cases generated on: 2011-11-10 19:52:46 : 1320969166*/
App::uses('PersonasTelefono', 'Model');

/**
 * PersonasTelefono Test Case
 *
 */
class PersonasTelefonoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.personas_telefono', 'app.persona', 'app.telefonos_tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->PersonasTelefono = ClassRegistry::init('PersonasTelefono');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PersonasTelefono);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
