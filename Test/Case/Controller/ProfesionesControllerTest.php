<?php
/* Profesiones Test cases generated on: 2011-11-08 23:33:27 : 1320809607*/
App::uses('ProfesionesController', 'Controller');

/**
 * TestProfesionesController 
 *
 */
class TestProfesionesController extends ProfesionesController {
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
 * ProfesionesController Test Case
 *
 */
class ProfesionesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.profesion', 'app.persona');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Profesiones = new TestProfesionesController();
		$this->Profesiones->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Profesiones);
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
