<?php
/**
 * InquilinosFiador Model
 *
 * @property Inquilino $Inquilino
 * @property Fiador $Fiador
 */
class InquilinosFiador extends AppModel {

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
		'Fiador' => array(
			'className' => 'Fiador',
			'foreignKey' => 'fiador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
