<?php
/**
 * Persona Model
 *
 * @property Sexo $Sexo
 * @property Ec $Ec
 * @property Profesion $Profesion
 * @property Nacionalidad $Nacionalidad
 * @property PersonasTipo $PersonasTipo
 * @property Fiador $Fiador
 * @property Inquilino $Inquilino
 * @property Propietario $Propietario
 * @property Direccion $Direccion
 * @property Telefono $Telefono
 */
class Persona extends AppModel {
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
		'nombres' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Mensaje personalizado aqui',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Detener validacion a partir de esta regla
				//'on' => 'create', // Limitar validacion a operaciones 'create' o 'update'
			),
		),
		'apellidos' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Mensaje personalizado aqui',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Detener validacion a partir de esta regla
				//'on' => 'create', // Limitar validacion a operaciones 'create' o 'update'
			),
		),
		'cedula' => array(
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
		'Sexo' => array(
			'className' => 'Sexo',
			'foreignKey' => 'sexo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ec' => array(
			'className' => 'Ec',
			'foreignKey' => 'ec_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Profesion' => array(
			'className' => 'Profesion',
			'foreignKey' => 'profesion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Nacionalidad' => array(
			'className' => 'Nacionalidad',
			'foreignKey' => 'nacionalidad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PersonasTipo' => array(
			'className' => 'PersonasTipo',
			'foreignKey' => 'personas_tipo_id',
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
		'Fiador' => array(
			'className' => 'Fiador',
			'foreignKey' => 'persona_id',
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
		'Inquilino' => array(
			'className' => 'Inquilino',
			'foreignKey' => 'persona_id',
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
		'Propietario' => array(
			'className' => 'Propietario',
			'foreignKey' => 'persona_id',
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
		'PersonasDireccion' => array(
			'className' => 'PersonasDireccion',
			'foreignKey' => 'persona_id',
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
		'PersonasTelefono' => array(
			'className' => 'PersonasTelefono',
			'foreignKey' => 'persona_id',
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
