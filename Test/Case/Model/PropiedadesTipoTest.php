<?php
/* PropiedadesTipo Test cases generated on: 2011-11-08 00:19:31 : 1320725971*/
App::uses('PropiedadesTipo', 'Model');

/**
 * PropiedadesTipo Test Case
 *
 */
class PropiedadesTipoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.propiedades_tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->PropiedadesTipo = ClassRegistry::init('PropiedadesTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropiedadesTipo);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
