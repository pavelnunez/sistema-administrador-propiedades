<?php
/* Ciudad Test cases generated on: 2011-11-08 23:34:42 : 1320809682*/
App::uses('Ciudad', 'Model');

/**
 * Ciudad Test Case
 *
 */
class CiudadTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ciudad', 'app.personas_direccion', 'app.propiedades_direccion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Ciudad = ClassRegistry::init('Ciudad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ciudad);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
