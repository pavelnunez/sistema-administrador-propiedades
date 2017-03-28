<?php
/**
 * Personas Controller
 *
 * @property Persona $Persona
 */
class PersonasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Persona->recursive = 0;
		$this->set('personas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$this->set('persona', $this->Persona->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$sexos = $this->Persona->Sexo->find('list');
		$ecs = $this->Persona->Ec->find('list');
		$profesiones = $this->Persona->Profesion->find('list');
		$nacionalidades = $this->Persona->Nacionalidad->find('list');
		$personasTipos = $this->Persona->PersonasTipo->find('list');
		$this->set(compact('sexos', 'ecs', 'profesiones', 'nacionalidades', 'personasTipos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Persona->read(null, $id);
		}
		$sexos = $this->Persona->Sexo->find('list');
		$ecs = $this->Persona->Ec->find('list');
		$profesiones = $this->Persona->Profesion->find('list');
		$nacionalidades = $this->Persona->Nacionalidad->find('list');
		$personasTipos = $this->Persona->PersonasTipo->find('list');
		$this->set(compact('sexos', 'ecs', 'profesiones', 'nacionalidades', 'personasTipos'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Persona->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Persona->recursive = 0;
		$this->set('personas', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$this->set('persona', $this->Persona->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$sexos = $this->Persona->Sexo->find('list');
		$ecs = $this->Persona->Ec->find('list');
		$profesiones = $this->Persona->Profesion->find('list');
		$nacionalidades = $this->Persona->Nacionalidad->find('list');
		$personasTipos = $this->Persona->PersonasTipo->find('list');
		$this->set(compact('sexos', 'ecs', 'profesiones', 'nacionalidades', 'personasTipos'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Persona->read(null, $id);
		}
		$sexos = $this->Persona->Sexo->find('list');
		$ecs = $this->Persona->Ec->find('list');
		$profesiones = $this->Persona->Profesion->find('list');
		$nacionalidades = $this->Persona->Nacionalidad->find('list');
		$personasTipos = $this->Persona->PersonasTipo->find('list');
		$this->set(compact('sexos', 'ecs', 'profesiones', 'nacionalidades', 'personasTipos'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Persona->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

}
