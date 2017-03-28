<?php
/**
 * InquilinosFiadores Controller
 *
 * @property InquilinosFiador $InquilinosFiador
 */
class InquilinosFiadoresController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InquilinosFiador->recursive = 0;
		$this->set('inquilinosFiadores', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->InquilinosFiador->id = $id;
		if (!$this->InquilinosFiador->exists()) {
			throw new NotFoundException(__('Invalid inquilinos fiador'));
		}
		$this->set('inquilinosFiador', $this->InquilinosFiador->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InquilinosFiador->create();
			if ($this->InquilinosFiador->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$inquilinos = $this->InquilinosFiador->Inquilino->find('list');
		$fiadores = $this->InquilinosFiador->Fiador->find('list');
		$this->set(compact('inquilinos', 'fiadores'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->InquilinosFiador->id = $id;
		if (!$this->InquilinosFiador->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->InquilinosFiador->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->InquilinosFiador->read(null, $id);
		}
		$inquilinos = $this->InquilinosFiador->Inquilino->find('list');
		$fiadores = $this->InquilinosFiador->Fiador->find('list');
		$this->set(compact('inquilinos', 'fiadores'));
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
		$this->InquilinosFiador->id = $id;
		if (!$this->InquilinosFiador->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->InquilinosFiador->delete()) {
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
		$this->InquilinosFiador->recursive = 0;
		$this->set('inquilinosFiadores', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->InquilinosFiador->id = $id;
		if (!$this->InquilinosFiador->exists()) {
			throw new NotFoundException(__('Invalid inquilinos fiador'));
		}
		$this->set('inquilinosFiador', $this->InquilinosFiador->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->InquilinosFiador->create();
			if ($this->InquilinosFiador->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$inquilinos = $this->InquilinosFiador->Inquilino->find('list');
		$fiadores = $this->InquilinosFiador->Fiador->find('list');
		$this->set(compact('inquilinos', 'fiadores'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->InquilinosFiador->id = $id;
		if (!$this->InquilinosFiador->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->InquilinosFiador->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->InquilinosFiador->read(null, $id);
		}
		$inquilinos = $this->InquilinosFiador->Inquilino->find('list');
		$fiadores = $this->InquilinosFiador->Fiador->find('list');
		$this->set(compact('inquilinos', 'fiadores'));
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
		$this->InquilinosFiador->id = $id;
		if (!$this->InquilinosFiador->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->InquilinosFiador->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

}
