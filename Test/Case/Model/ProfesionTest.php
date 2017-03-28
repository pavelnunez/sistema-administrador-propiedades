<?php
/* Profesion Test cases generated on: 2011-11-08 23:33:13 : 1320809593*/
App::uses('Profesion', 'Model');

/**
 * Profesion Test Case
 *
 */
class ProfesionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.profesion', 'app.persona');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Profesion = ClassRegistry::init('Profesion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Profesion);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
