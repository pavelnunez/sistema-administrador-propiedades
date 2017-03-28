<?php
/**
 * Usuario Model
 *
 * @property Reclamacion $Reclamacion
 */
class Usuario extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'usuario';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'usuario' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'El nombre de usuario no puede estar en blanco',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Detener validacion a partir de esta regla
				//'on' => 'create', // Limitar validacion a operaciones 'create' o 'update'
			),
		),
		'contrasena' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Debe digitar una contraseña',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Detener validacion a partir de esta regla
				//'on' => 'create', // Limitar validacion a operaciones 'create' o 'update'
			),
		),
		'rol' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Debe asignar un rol al usuario',
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
		'Reclamacion' => array(
			'className' => 'Reclamacion',
			'foreignKey' => 'usuario_id',
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
	
	public function beforeSave(){
		if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    	}
    	return true;
	}

}
