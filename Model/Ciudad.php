<?php
/**
 * Ciudad Model
 *
 * @property PersonasDireccion $PersonasDireccion
 * @property PropiedadesDireccion $PropiedadesDireccion
 */
class Ciudad extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ciudad';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ciudad' => array(
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
			'foreignKey' => 'ciudad_id',
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
			'foreignKey' => 'ciudad_id',
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
