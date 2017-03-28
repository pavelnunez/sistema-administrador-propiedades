<?php
/* PersonasTipos Test cases generated on: 2011-11-08 00:14:40 : 1320725680*/
App::uses('PersonasTipos', 'Controller');

/**
 * TestPersonasTipos 
 *
 */
class TestPersonasTipos extends PersonasTipos {
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
 * PersonasTipos Test Case
 *
 */
class PersonasTiposTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.personas_tipo', 'app.persona');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->PersonasTipos = new TestPersonasTipos();
		$this->Per->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PersonasTipos);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
