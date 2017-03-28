<?php
/**
 * Pagos Controller
 *
 * @property Pago $Pago
 */
class PagosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pago->recursive = 0;
		$this->set('pagos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Pago->id = $id;
		if (!$this->Pago->exists()) {
			throw new NotFoundException(__('Invalid pago'));
		}
		$this->set('pago', $this->Pago->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pago->create();
			if ($this->Pago->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$inquilinos = $this->Pago->Inquilino->find('list');
		$propiedades = $this->Pago->Propiedad->find('list');
		$this->set(compact('inquilinos', 'propiedades'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Pago->id = $id;
		if (!$this->Pago->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pago->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Pago->read(null, $id);
		}
		$inquilinos = $this->Pago->Inquilino->find('list');
		$propiedades = $this->Pago->Propiedad->find('list');
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
		$this->Pago->id = $id;
		if (!$this->Pago->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Pago->delete()) {
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
		$this->Pago->recursive = 0;
		$this->set('pagos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Pago->id = $id;
		if (!$this->Pago->exists()) {
			throw new NotFoundException(__('Invalid pago'));
		}
		$this->set('pago', $this->Pago->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Pago->create();
			if ($this->Pago->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$inquilinos = $this->Pago->Inquilino->find('list');
		$propiedades = $this->Pago->Propiedad->find('list');
		$this->set(compact('inquilinos', 'propiedades'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Pago->id = $id;
		if (!$this->Pago->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pago->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->Pago->read(null, $id);
		}
		$inquilinos = $this->Pago->Inquilino->find('list');
		$propiedades = $this->Pago->Propiedad->find('list');
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
		$this->Pago->id = $id;
		if (!$this->Pago->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->Pago->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

}
