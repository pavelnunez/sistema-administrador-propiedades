<?php
/* Sexos Test cases generated on: 2011-11-08 00:37:37 : 1320727057*/
App::uses('Sexos', 'Controller');

/**
 * TestSexos 
 *
 */
class TestSexos extends Sexos {
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
 * Sexos Test Case
 *
 */
class SexosTestCase extends CakeTestCase {
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

		$this->Sexos = new TestSexos();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sexos);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
