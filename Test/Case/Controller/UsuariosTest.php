<?php
/* Usuarios Test cases generated on: 2011-11-08 00:29:29 : 1320726569*/
App::uses('Usuarios', 'Controller');

/**
 * TestUsuarios 
 *
 */
class TestUsuarios extends Usuarios {
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
 * Usuarios Test Case
 *
 */
class UsuariosTestCase extends CakeTestCase {
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

		$this->Usuarios = new TestUsuarios();
		$this->Usuari->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usuarios);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
