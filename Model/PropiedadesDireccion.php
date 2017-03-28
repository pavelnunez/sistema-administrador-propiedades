<?php
/**
 * PropiedadesDireccion Model
 *
 * @property Propiedad $Propiedad
 * @property DireccionesTipo $DireccionesTipo
 * @property Sector $Sector
 * @property Ciudad $Ciudad
 */
class PropiedadesDireccion extends AppModel {

	//Las asociaciones mas abajo han sido creadas con todas las claves posibles, aquellas que no sean necearias pueden ser borradas

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Propiedad' => array(
			'className' => 'Propiedad',
			'foreignKey' => 'propiedad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DireccionesTipo' => array(
			'className' => 'DireccionesTipo',
			'foreignKey' => 'direcciones_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sector' => array(
			'className' => 'Sector',
			'foreignKey' => 'sector_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ciudad' => array(
			'className' => 'Ciudad',
			'foreignKey' => 'ciudad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
