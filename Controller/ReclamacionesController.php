<?php
/**
 * Reclamaciones Controller
 *
 * @property Reclamacion $Reclamacion
 */
class ReclamacionesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Reclamacion->recursive = 0;
		$this->set('reclamaciones', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Reclamacion->id = $id;
		if (!$this->Reclamacion->exists()) {
			throw new NotFoundException(__('Invalid reclamacion'));
		}
		$this->set('reclamacion', $this->Reclamacion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reclamacion->create();
			if ($this->Reclamacion->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$inquilinos = $this->Reclamacion->Inquilino->find('list');
		$usuarios = $this->Reclamacion->Usuario->find('list');
		$this->set(compact('inquilinos', 'usuarios'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Reclamacion->id = $id;
		if (!$this->Reclamacion->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Reclamacion->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Reclamacion->read(null, $id);
		}
		$inquilinos = $this->Reclamacion->Inquilino->find('list');
		$usuarios = $this->Reclamacion->Usuario->find('list');
		$this->set(compact('inquilinos', 'usuarios'));
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
		$this->Reclamacion->id = $id;
		if (!$this->Reclamacion->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Reclamacion->delete()) {
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
		$this->Reclamacion->recursive = 0;
		$this->set('reclamaciones', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Reclamacion->id = $id;
		if (!$this->Reclamacion->exists()) {
			throw new NotFoundException(__('Invalid reclamacion'));
		}
		$this->set('reclamacion', $this->Reclamacion->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Reclamacion->create();
			if ($this->Reclamacion->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$inquilinos = $this->Reclamacion->Inquilino->find('list');
		$usuarios = $this->Reclamacion->Usuario->find('list');
		$this->set(compact('inquilinos', 'usuarios'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Reclamacion->id = $id;
		if (!$this->Reclamacion->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Reclamacion->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Reclamacion->read(null, $id);
		}
		$inquilinos = $this->Reclamacion->Inquilino->find('list');
		$usuarios = $this->Reclamacion->Usuario->find('list');
		$this->set(compact('inquilinos', 'usuarios'));
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
		$this->Reclamacion->id = $id;
		if (!$this->Reclamacion->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Reclamacion->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

}
