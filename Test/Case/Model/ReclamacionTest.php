<?php
/* Reclamacion Test cases generated on: 2011-11-08 23:29:54 : 1320809394*/
App::uses('Reclamacion', 'Model');

/**
 * Reclamacion Test Case
 *
 */
class ReclamacionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.reclamacion', 'app.inquilino', 'app.usuario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Reclamacion = ClassRegistry::init('Reclamacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reclamacion);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
