<?php
/**
 * Excusas Controller
 *
 * @property Excusa $Excusa
 */
class ExcusasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Excusa->recursive = 0;
		$this->set('excusas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Excusa->id = $id;
		if (!$this->Excusa->exists()) {
			throw new NotFoundException(__('Invalid excusa'));
		}
		$this->set('excusa', $this->Excusa->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Excusa->create();
			if ($this->Excusa->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$inquilinos = $this->Excusa->Inquilino->find('list');
		$propiedades = $this->Excusa->Propiedad->find('list');
		$this->set(compact('inquilinos', 'propiedades'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Excusa->id = $id;
		if (!$this->Excusa->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Excusa->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Excusa->read(null, $id);
		}
		$inquilinos = $this->Excusa->Inquilino->find('list');
		$propiedades = $this->Excusa->Propiedad->find('list');
		$this->set(compact('inquilinos', 'propiedades'));
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
		$this->Excusa->id = $id;
		if (!$this->Excusa->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Excusa->delete()) {
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
		$this->Excusa->recursive = 0;
		$this->set('excusas', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Excusa->id = $id;
		if (!$this->Excusa->exists()) {
			throw new NotFoundException(__('Invalid excusa'));
		}
		$this->set('excusa', $this->Excusa->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Excusa->create();
			if ($this->Excusa->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$inquilinos = $this->Excusa->Inquilino->find('list');
		$propiedades = $this->Excusa->Propiedad->find('list');
		$this->set(compact('inquilinos', 'propiedades'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Excusa->id = $id;
		if (!$this->Excusa->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Excusa->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Excusa->read(null, $id);
		}
		$inquilinos = $this->Excusa->Inquilino->find('list');
		$propiedades = $this->Excusa->Propiedad->find('list');
		$this->set(compact('inquilinos', 'propiedades'));
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
		$this->Excusa->id = $id;
		if (!$this->Excusa->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Excusa->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

}
