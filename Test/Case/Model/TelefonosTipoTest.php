<?php
/* TelefonosTipo Test cases generated on: 2011-11-08 00:23:30 : 1320726210*/
App::uses('TelefonosTipo', 'Model');

/**
 * TelefonosTipo Test Case
 *
 */
class TelefonosTipoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.telefonos_tipo', 'app.personas_telefono');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->TelefonosTipo = ClassRegistry::init('TelefonosTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TelefonosTipo);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
