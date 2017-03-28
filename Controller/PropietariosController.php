<?php
/**
 * Propietarios Controller
 *
 * @property Propietario $Propietario
 */
class PropietariosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Propietario->recursive = 0;
		$this->set('propietarios', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Propietario->id = $id;
		if (!$this->Propietario->exists()) {
			throw new NotFoundException(__('Invalid propietario'));
		}
		$this->set('propietario', $this->Propietario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Propietario->create();
			if ($this->Propietario->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$personas = $this->Propietario->Persona->find('list');
		$propiedades = $this->Propietario->Propiedad->find('list');
		$this->set(compact('personas', 'propiedades'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Propietario->id = $id;
		if (!$this->Propietario->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Propietario->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Propietario->read(null, $id);
		}
		$personas = $this->Propietario->Persona->find('list');
		$propiedades = $this->Propietario->Propiedad->find('list');
		$this->set(compact('personas', 'propiedades'));
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
		$this->Propietario->id = $id;
		if (!$this->Propietario->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Propietario->delete()) {
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
		$this->Propietario->recursive = 0;
		$this->set('propietarios', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Propietario->id = $id;
		if (!$this->Propietario->exists()) {
			throw new NotFoundException(__('Invalid propietario'));
		}
		$this->set('propietario', $this->Propietario->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Propietario->create();
			if ($this->Propietario->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$personas = $this->Propietario->Persona->find('list');
		$propiedades = $this->Propietario->Propiedad->find('list');
		$this->set(compact('personas', 'propiedades'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Propietario->id = $id;
		if (!$this->Propietario->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Propietario->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Propietario->read(null, $id);
		}
		$personas = $this->Propietario->Persona->find('list');
		$propiedades = $this->Propietario->Propiedad->find('list');
		$this->set(compact('personas', 'propiedades'));
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
		$this->Propietario->id = $id;
		if (!$this->Propietario->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Propietario->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

}
