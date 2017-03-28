<?php
/**
 * Excusa Model
 *
 * @property Inquilino $Inquilino
 * @property Propiedad $Propiedad
 */
class Excusa extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'clave';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'clave' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Mensaje personalizado aqui',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Detener validacion a partir de esta regla
				//'on' => 'create', // Limitar validacion a operaciones 'create' o 'update'
			),
		),
		'excusa' => array(
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
