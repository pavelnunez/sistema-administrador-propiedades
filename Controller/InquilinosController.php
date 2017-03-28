<?php
/**
 * Inquilinos Controller
 *
 * @property Inquilino $Inquilino
 */
class InquilinosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Inquilino->recursive = 0;
		$this->set('inquilinos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Inquilino->id = $id;
		if (!$this->Inquilino->exists()) {
			throw new NotFoundException(__('Invalid inquilino'));
		}
		$this->set('inquilino', $this->Inquilino->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Inquilino->create();
			if ($this->Inquilino->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$personas = $this->Inquilino->Persona->find('list');
		$fiadores = $this->Inquilino->Fiador->find('list');
		$this->set(compact('personas', 'fiadores'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Inquilino->id = $id;
		if (!$this->Inquilino->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Inquilino->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Inquilino->read(null, $id);
		}
		$personas = $this->Inquilino->Persona->find('list');
		$fiadores = $this->Inquilino->Fiador->find('list');
		$this->set(compact('personas', 'fiadores'));
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
		$this->Inquilino->id = $id;
		if (!$this->Inquilino->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Inquilino->delete()) {
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
		$this->Inquilino->recursive = 0;
		$this->set('inquilinos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Inquilino->id = $id;
		if (!$this->Inquilino->exists()) {
			throw new NotFoundException(__('Invalid inquilino'));
		}
		$this->set('inquilino', $this->Inquilino->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Inquilino->create();
			if ($this->Inquilino->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$personas = $this->Inquilino->Persona->find('list');
		$fiadores = $this->Inquilino->Fiador->find('list');
		$this->set(compact('personas', 'fiadores'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Inquilino->id = $id;
		if (!$this->Inquilino->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Inquilino->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Inquilino->read(null, $id);
		}
		$personas = $this->Inquilino->Persona->find('list');
		$fiadores = $this->Inquilino->Fiador->find('list');
		$this->set(compact('personas', 'fiadores'));
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
		$this->Inquilino->id = $id;
		if (!$this->Inquilino->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Inquilino->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

}
