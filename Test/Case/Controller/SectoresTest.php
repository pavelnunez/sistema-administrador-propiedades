<?php
/* Sectores Test cases generated on: 2011-11-08 00:41:12 : 1320727272*/
App::uses('Sectores', 'Controller');

/**
 * TestSectores 
 *
 */
class TestSectores extends Sectores {
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
 * Sectores Test Case
 *
 */
class SectoresTestCase extends CakeTestCase {
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

		$this->Sectores = new TestSectores();
		$this->Sector->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sectores);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
