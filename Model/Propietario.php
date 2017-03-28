<?php
/**
 * Propietario Model
 *
 * @property Persona $Persona
 * @property Contrato $Contrato
 * @property Propiedad $Propiedad
 */
class Propietario extends AppModel {
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

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Contrato' => array(
			'className' => 'Contrato',
			'foreignKey' => 'propietario_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Propiedad' => array(
			'className' => 'Propiedad',
			'joinTable' => 'propiedades_propietarios',
			'foreignKey' => 'propietario_id',
			'associationForeignKey' => 'propiedad_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
