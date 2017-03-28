<?php
/* PropiedadesTipos Test cases generated on: 2011-11-08 00:20:11 : 1320726011*/
App::uses('PropiedadesTipos', 'Controller');

/**
 * TestPropiedadesTipos 
 *
 */
class TestPropiedadesTipos extends PropiedadesTipos {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * PropiedadesTipos Test Case
 *
 */
class PropiedadesTiposTestCase extends CakeTestCase {
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

		$this->PropiedadesTipos = new TestPropiedadesTipos();
		$this->Propie->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropiedadesTipos);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
