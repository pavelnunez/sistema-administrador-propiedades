<?php
/**
 * Pago Model
 *
 * @property Inquilino $Inquilino
 * @property Propiedad $Propiedad
 */
class Pago extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'clave';

	//Las asociaciones mas abajo han sido creadas con todas las claves posibles, aquellas que no sean necearias pueden ser borradas

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Inquilino' => array(
			'className' => 'Inquilino',
			'foreignKey' => 'inquilino_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Propiedad' => array(
			'className' => 'Propiedad',
			'foreignKey' => 'propiedad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
