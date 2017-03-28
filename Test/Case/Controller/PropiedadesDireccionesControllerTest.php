<?php
/* PropiedadesDirecciones Test cases generated on: 2011-11-10 19:51:50 : 1320969110*/
App::uses('PropiedadesDireccionesController', 'Controller');

/**
 * TestPropiedadesDireccionesController 
 *
 */
class TestPropiedadesDireccionesController extends PropiedadesDireccionesController {
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
 * PropiedadesDireccionesController Test Case
 *
 */
class PropiedadesDireccionesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.propiedades_direccion', 'app.propiedad', 'app.propiedades_tipo', 'app.contrato', 'app.excusa', 'app.pago', 'app.direcciones_tipo', 'app.sector', 'app.personas_direccion', 'app.ciudad');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->PropiedadesDirecciones = new TestPropiedadesDireccionesController();
		$this->PropiedadesDirecciones->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropiedadesDirecciones);
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
