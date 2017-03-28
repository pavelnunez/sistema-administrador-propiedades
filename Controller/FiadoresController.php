<?php
/**
 * Fiadores Controller
 *
 * @property Fiador $Fiador
 */
class FiadoresController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Fiador->recursive = 0;
		$this->set('fiadores', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Fiador->id = $id;
		if (!$this->Fiador->exists()) {
			throw new NotFoundException(__('Invalid fiador'));
		}
		$this->set('fiador', $this->Fiador->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fiador->create();
			if ($this->Fiador->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$personas = $this->Fiador->Persona->find('list');
		$this->set(compact('personas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Fiador->id = $id;
		if (!$this->Fiador->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Fiador->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Fiador->read(null, $id);
		}
		$personas = $this->Fiador->Persona->find('list');
		$this->set(compact('personas'));
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
		$this->Fiador->id = $id;
		if (!$this->Fiador->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Fiador->delete()) {
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
		$this->Fiador->recursive = 0;
		$this->set('fiadores', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Fiador->id = $id;
		if (!$this->Fiador->exists()) {
			throw new NotFoundException(__('Invalid fiador'));
		}
		$this->set('fiador', $this->Fiador->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Fiador->create();
			if ($this->Fiador->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$personas = $this->Fiador->Persona->find('list');
		$this->set(compact('personas'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Fiador->id = $id;
		if (!$this->Fiador->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Fiador->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Fiador->read(null, $id);
		}
		$personas = $this->Fiador->Persona->find('list');
		$this->set(compact('personas'));
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
		$this->Fiador->id = $id;
		if (!$this->Fiador->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Fiador->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

}
