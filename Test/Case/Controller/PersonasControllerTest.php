<?php
/* Personas Test cases generated on: 2011-11-10 20:49:54 : 1320972594*/
App::uses('PersonasController', 'Controller');

/**
 * TestPersonasController 
 *
 */
class TestPersonasController extends PersonasController {
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
 * PersonasController Test Case
 *
 */
class PersonasControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.persona', 'app.sexo', 'app.ec', 'app.profesion', 'app.nacionalidad', 'app.personas_tipo', 'app.fiador', 'app.inquilino', 'app.contrato', 'app.excusa', 'app.propiedad', 'app.propiedades_tipo', 'app.pago', 'app.reclamacion', 'app.usuario', 'app.inquilinos_fiador', 'app.propietario', 'app.propiedades_propietario', 'app.personas_direccion', 'app.direcciones_tipo', 'app.sector', 'app.propiedades_direccion', 'app.ciudad', 'app.personas_telefono', 'app.telefonos_tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Personas = new TestPersonasController();
		$this->Personas->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Personas);
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
