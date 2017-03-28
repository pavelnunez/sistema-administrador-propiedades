<?php
/**
 * @name Dashboard
 * @desc Clase que implementa algunas funcionalidades de Dashboard, Panel de Control
 * o Panel Principal de Funciones del sistema/CMS/Administracion de portal. 
 * @version 0.0.1 Revision 20111117-1903
 * 
 * */

class DashboardController extends AppController {
	 public $uses = array();
	 
	 
	 public function beforeFilter(){
	 	parent::beforeFilter();
	 	$this->Auth->allow('*');
	 }
	 
	 public function index(){
	 	
	 }
}
