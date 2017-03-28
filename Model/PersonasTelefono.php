<?php
/**
 * PersonasTelefono Model
 *
 * @property Persona $Persona
 * @property TelefonosTipo $TelefonosTipo
 */
class PersonasTelefono extends AppModel {

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
		),
		'TelefonosTipo' => array(
			'className' => 'TelefonosTipo',
			'foreignKey' => 'telefonos_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
