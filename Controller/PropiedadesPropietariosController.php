<?php
/**
 * PropiedadesPropietarios Controller
 *
 * @property PropiedadesPropietario $PropiedadesPropietario
 */
class PropiedadesPropietariosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PropiedadesPropietario->recursive = 0;
		$this->set('propiedadesPropietarios', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PropiedadesPropietario->id = $id;
		if (!$this->PropiedadesPropietario->exists()) {
			throw new NotFoundException(__('Invalid propiedades propietario'));
		}
		$this->set('propiedadesPropietario', $this->PropiedadesPropietario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PropiedadesPropietario->create();
			if ($this->PropiedadesPropietario->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$propiedades = $this->PropiedadesPropietario->Propiedad->find('list');
		$propietarios = $this->PropiedadesPropietario->Propietario->find('list');
		$this->set(compact('propiedades', 'propietarios'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PropiedadesPropietario->id = $id;
		if (!$this->PropiedadesPropietario->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropiedadesPropietario->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->PropiedadesPropietario->read(null, $id);
		}
		$propiedades = $this->PropiedadesPropietario->Propiedad->find('list');
		$propietarios = $this->PropiedadesPropietario->Propietario->find('list');
		$this->set(compact('propiedades', 'propietarios'));
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
		$this->PropiedadesPropietario->id = $id;
		if (!$this->PropiedadesPropietario->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->PropiedadesPropietario->delete()) {
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
		$this->PropiedadesPropietario->recursive = 0;
		$this->set('propiedadesPropietarios', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->PropiedadesPropietario->id = $id;
		if (!$this->PropiedadesPropietario->exists()) {
			throw new NotFoundException(__('Invalid propiedades propietario'));
		}
		$this->set('propiedadesPropietario', $this->PropiedadesPropietario->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PropiedadesPropietario->create();
			if ($this->PropiedadesPropietario->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$propiedades = $this->PropiedadesPropietario->Propiedad->find('list');
		$propietarios = $this->PropiedadesPropietario->Propietario->find('list');
		$this->set(compact('propiedades', 'propietarios'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->PropiedadesPropietario->id = $id;
		if (!$this->PropiedadesPropietario->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropiedadesPropietario->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->PropiedadesPropietario->read(null, $id);
		}
		$propiedades = $this->PropiedadesPropietario->Propiedad->find('list');
		$propietarios = $this->PropiedadesPropietario->Propietario->find('list');
		$this->set(compact('propiedades', 'propietarios'));
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
		$this->PropiedadesPropietario->id = $id;
		if (!$this->PropiedadesPropietario->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->PropiedadesPropietario->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

}
