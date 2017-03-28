<?php
/* Sector Test cases generated on: 2011-11-08 00:40:59 : 1320727259*/
App::uses('Sector', 'Model');

/**
 * Sector Test Case
 *
 */
class SectorTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.sector', 'app.personas_direccion', 'app.propiedades_direccion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Sector = ClassRegistry::init('Sector');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sector);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
