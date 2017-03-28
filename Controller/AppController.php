<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       Cake.Console.Templates.skel.Controller
 */
class AppController extends Controller {
	/** 
	 *  Para implementar los componentes de Sesion y Autenticacion
	 * */
	public $components = array('Session', 
			'Auth' => array(
					'loginAction' => array(
								'controller' => 'usuarios',
								'action' => 'login'),
					'loginRedirect' => array('controller' => 'usuarios', 'action' => 'index'), 
					'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
					'authenticate' => array('Form' => array('userModel' => 'Usuarios.Usuario'))
			)
			
	);
	
	public function beforeFilter(){
		
		
		$this->Auth->authenticate = array('Form' => array('userModel' => 'Usuarios.Usuario'));
		
		/* Define el model que se usara para autenticar los usuario. Por defecto es 'User' en este caso es 'Usuario' */
		//$this->Auth->userModel = 'Usuarios.Usuario';
		/* Define cuales son los campos de la tabla contra los cuales autenticar los usuarios */
		$this->Auth->fields = array('username' => 'usuario', 'password' => 'contrasena');
			
		/* Se ubican estas configuraciones aqui, por que el diseño actual de PHP
	 	* no soporta que a las propiedades se le asignen resultados de funciones. 
	 	* Este metodo, simula de alguna manera algo parecido al metodo __construct. 
	 	* Se le asigna un valor a las propiedades authError y loginError 
	 	*/
		
		/* Define el error de autenticación la primera vez que se accede al portal/aplicacion sin estar autenticado */
		$this->Auth->authError = __('Ha intentado acceder a un recurso protegido con contraseña.', true);
		/* Define el error de validacón de credenciales, que resultan inválidas */
        $this->Auth->loginError = __('Credenciales inválidas', true);
		
		$this->Auth->allow('index', 'view');
	}
	
	
}
