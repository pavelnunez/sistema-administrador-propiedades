<?php
/* Inquilinos Test cases generated on: 2011-11-10 20:02:10 : 1320969730*/
App::uses('Inquilinos', 'Controller');

/**
 * TestInquilinos 
 *
 */
class TestInquilinos extends Inquilinos {
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
 * Inquilinos Test Case
 *
 */
class InquilinosTestCase extends CakeTestCase {
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Inquilinos = new TestInquilinos();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inquilinos);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
