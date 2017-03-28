<?php
/**
 * PropiedadesTipo Model
 *
 */
class PropiedadesTipo extends AppModel {
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
}
