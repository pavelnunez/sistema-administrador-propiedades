<?php
/* TelefonosTipos Test cases generated on: 2011-11-08 00:23:56 : 1320726236*/
App::uses('TelefonosTipos', 'Controller');

/**
 * TestTelefonosTipos 
 *
 */
class TestTelefonosTipos extends TelefonosTipos {
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
 * TelefonosTipos Test Case
 *
 */
class TelefonosTiposTestCase extends CakeTestCase {
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

		$this->TelefonosTipos = new TestTelefonosTipos();
		$this->Tele->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TelefonosTipos);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
