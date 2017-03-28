<?php
/**
 * Propiedad Model
 *
 * @property PropiedadesTipo $PropiedadesTipo
 * @property Contrato $Contrato
 * @property Excusa $Excusa
 * @property Pago $Pago
 */
class Propiedad extends AppModel {
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
		'PropiedadesTipo' => array(
			'className' => 'PropiedadesTipo',
			'foreignKey' => 'propiedades_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Contrato' => array(
			'className' => 'Contrato',
			'foreignKey' => 'propiedad_id',
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
		'Excusa' => array(
			'className' => 'Excusa',
			'foreignKey' => 'propiedad_id',
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
		'Pago' => array(
			'className' => 'Pago',
			'foreignKey' => 'propiedad_id',
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
