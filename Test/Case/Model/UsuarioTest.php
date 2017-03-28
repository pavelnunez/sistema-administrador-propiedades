<?php
/* Usuario Test cases generated on: 2011-11-08 00:28:46 : 1320726526*/
App::uses('Usuario', 'Model');

/**
 * Usuario Test Case
 *
 */
class UsuarioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.usuario', 'app.reclamacion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Usuario = ClassRegistry::init('Usuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usuario);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
