<?php
/**
 * Propiedades Controller
 *
 * @property Propiedad $Propiedad
 */
class PropiedadesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Propiedad->recursive = 0;
		$this->set('propiedades', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Propiedad->id = $id;
		if (!$this->Propiedad->exists()) {
			throw new NotFoundException(__('Invalid propiedad'));
		}
		$this->set('propiedad', $this->Propiedad->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Propiedad->create();
			if ($this->Propiedad->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$propiedadesTipos = $this->Propiedad->PropiedadesTipo->find('list');
		$this->set(compact('propiedadesTipos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Propiedad->id = $id;
		if (!$this->Propiedad->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Propiedad->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Propiedad->read(null, $id);
		}
		$propiedadesTipos = $this->Propiedad->PropiedadesTipo->find('list');
		$this->set(compact('propiedadesTipos'));
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
		$this->Propiedad->id = $id;
		if (!$this->Propiedad->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Propiedad->delete()) {
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
		$this->Propiedad->recursive = 0;
		$this->set('propiedades', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Propiedad->id = $id;
		if (!$this->Propiedad->exists()) {
			throw new NotFoundException(__('Invalid propiedad'));
		}
		$this->set('propiedad', $this->Propiedad->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Propiedad->create();
			if ($this->Propiedad->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$propiedadesTipos = $this->Propiedad->PropiedadesTipo->find('list');
		$this->set(compact('propiedadesTipos'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Propiedad->id = $id;
		if (!$this->Propiedad->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Propiedad->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Propiedad->read(null, $id);
		}
		$propiedadesTipos = $this->Propiedad->PropiedadesTipo->find('list');
		$this->set(compact('propiedadesTipos'));
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
		$this->Propiedad->id = $id;
		if (!$this->Propiedad->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Propiedad->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

}
