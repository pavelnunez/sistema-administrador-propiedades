<?php
/* Persona Fixture generated on: 2011-11-10 20:10:07 : 1320970207 */

/**
 * PersonaFixture
 *
 */
class PersonaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'clave' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'nombres' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'apellidos' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'cedula' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 15, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'pasaporte' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'sexo_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'fecha_nacimiento' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'ec_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'profesion_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'nacionalidad_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'personas_tipo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'activo' => array('type' => 'boolean', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'clave' => 'Lorem ipsum dolor sit amet',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'cedula' => 'Lorem ipsum d',
			'pasaporte' => 'Lorem ipsum dolor ',
			'sexo_id' => 'Lorem ipsum dolor sit amet',
			'fecha_nacimiento' => '2011-11-10',
			'ec_id' => 1,
			'profesion_id' => 1,
			'nacionalidad_id' => 1,
			'personas_tipo_id' => 1,
			'activo' => 1
		),
	);
}
