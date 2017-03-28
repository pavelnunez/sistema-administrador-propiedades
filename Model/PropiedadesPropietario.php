<?php
/**
 * PropiedadesPropietario Model
 *
 * @property Propiedad $Propiedad
 * @property Propietario $Propietario
 */
class PropiedadesPropietario extends AppModel {

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
		'Propietario' => array(
			'className' => 'Propietario',
			'foreignKey' => 'propietario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
