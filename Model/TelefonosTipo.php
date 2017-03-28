<?php
/**
 * TelefonosTipo Model
 *
 * @property PersonasTelefono $PersonasTelefono
 */
class TelefonosTipo extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tipo';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tipo' => array(
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
		'PersonasTelefono' => array(
			'className' => 'PersonasTelefono',
			'foreignKey' => 'telefonos_tipo_id',
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
