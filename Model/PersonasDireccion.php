<?php
/**
 * PersonasDireccion Model
 *
 * @property Persona $Persona
 * @property DireccionesTipo $DireccionesTipo
 * @property Sector $Sector
 * @property Ciudad $Ciudad
 */
class PersonasDireccion extends AppModel {

	//Las asociaciones mas abajo han sido creadas con todas las claves posibles, aquellas que no sean necearias pueden ser borradas

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
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
