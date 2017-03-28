<?php
/* Sexo Test cases generated on: 2011-11-08 00:31:20 : 1320726680*/
App::uses('Sexo', 'Model');

/**
 * Sexo Test Case
 *
 */
class SexoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.sexo', 'app.persona');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Sexo = ClassRegistry::init('Sexo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sexo);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
