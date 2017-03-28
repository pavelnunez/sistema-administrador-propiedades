<?php
/* PersonasTipo Test cases generated on: 2011-11-08 00:14:14 : 1320725654*/
App::uses('PersonasTipo', 'Model');

/**
 * PersonasTipo Test Case
 *
 */
class PersonasTipoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.personas_tipo', 'app.persona');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->PersonasTipo = ClassRegistry::init('PersonasTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PersonasTipo);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
