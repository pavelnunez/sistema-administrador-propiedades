<?php
/**
 * Fiador Model
 *
 * @property Persona $Persona
 */
class Fiador extends AppModel {
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
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
