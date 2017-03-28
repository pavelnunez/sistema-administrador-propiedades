<?php
/**
 * Reclamacion Model
 *
 * @property Inquilino $Inquilino
 * @property Usuario $Usuario
 */
class Reclamacion extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'numero';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'numero' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Mensaje personalizado aqui',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Detener validacion a partir de esta regla
				//'on' => 'create', // Limitar validacion a operaciones 'create' o 'update'
			),
		),
		'inquilino_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Mensaje personalizado aqui',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Detener validacion a partir de esta regla
				//'on' => 'create', // Limitar validacion a operaciones 'create' o 'update'
			),
		),
		'usuario_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Mensaje personalizado aqui',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Detener validacion a partir de esta regla
				//'on' => 'create', // Limitar validacion a operaciones 'create' o 'update'
			),
		),
		'detalle' => array(
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
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
