<?php
/* Fiadores Test cases generated on: 2011-11-10 20:25:43 : 1320971143*/
App::uses('FiadoresController', 'Controller');

/**
 * TestFiadoresController 
 *
 */
class TestFiadoresController extends FiadoresController {
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
 * FiadoresController Test Case
 *
 */
class FiadoresControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.fiador', 'app.persona', 'app.sexo', 'app.ec', 'app.profesion', 'app.nacionalidad', 'app.personas_tipo', 'app.inquilino', 'app.contrato', 'app.excusa', 'app.pago', 'app.reclamacion', 'app.usuario', 'app.inquilinos_fiador', 'app.propietario', 'app.propiedad', 'app.propiedades_tipo', 'app.propiedades_propietario', 'app.direccion', 'app.personas_direccion', 'app.telefono', 'app.personas_telefono');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Fiadores = new TestFiadoresController();
		$this->Fiadores->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fiadores);
		ClassRegistry::flush();

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

/**
 * testAdminIndex method
 *
 * @return void
 */
	public function testAdminIndex() {

	}

/**
 * testAdminView method
 *
 * @return void
 */
	public function testAdminView() {

	}

/**
 * testAdminAdd method
 *
 * @return void
 */
	public function testAdminAdd() {

	}

/**
 * testAdminEdit method
 *
 * @return void
 */
	public function testAdminEdit() {

	}

/**
 * testAdminDelete method
 *
 * @return void
 */
	public function testAdminDelete() {

	}

}
