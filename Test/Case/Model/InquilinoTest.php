<?php
/* Inquilino Test cases generated on: 2011-11-10 20:01:37 : 1320969697*/
App::uses('Inquilino', 'Model');

/**
 * Inquilino Test Case
 *
 */
class InquilinoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.inquilino', 'app.persona', 'app.contrato', 'app.excusa', 'app.pago', 'app.reclamacion', 'app.usuario', 'app.fiador', 'app.inquilinos_fiador');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Inquilino = ClassRegistry::init('Inquilino');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inquilino);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
