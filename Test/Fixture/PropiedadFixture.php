<?php
/* Propiedad Fixture generated on: 2011-11-10 19:09:08 : 1320966548 */

/**
 * PropiedadFixture
 *
 */
class PropiedadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'clave' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'descripcion' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'descripcion_corta' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'habitaciones' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'sala' => array('type' => 'boolean', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'cocina' => array('type' => 'boolean', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'balcon' => array('type' => 'boolean', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'propiedades_tipo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
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
			'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'descripcion_corta' => 'Lorem ipsum dolor sit amet',
			'habitaciones' => 1,
			'sala' => 1,
			'cocina' => 1,
			'balcon' => 1,
			'propiedades_tipo_id' => 1,
			'activo' => 1
		),
	);
}
