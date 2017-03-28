<?php
/**
 * Sector Model
 *
 * @property PersonasDireccion $PersonasDireccion
 * @property PropiedadesDireccion $PropiedadesDireccion
 */
class Sector extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'sector';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'sector' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Mensaje personalizado aqui',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Detener validacion a partir de esta regla
				//'on' => 'create', // Limitar validacion a operaciones 'create' o 'update'
			),
		),
	);

	//Las asociaciones mas abajo han sido creadas con todas las claves posibles, aquellas que no sean necearias pueden ser borradas

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'PersonasDireccion' => array(
			'className' => 'PersonasDireccion',
			'foreignKey' => 'sector_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PropiedadesDireccion' => array(
			'className' => 'PropiedadesDireccion',
			'foreignKey' => 'sector_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
