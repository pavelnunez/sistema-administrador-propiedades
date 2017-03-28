<?php
/**
 * PersonasTelefonos Controller
 *
 * @property PersonasTelefono $PersonasTelefono
 */
class PersonasTelefonosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PersonasTelefono->recursive = 0;
		$this->set('personasTelefonos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PersonasTelefono->id = $id;
		if (!$this->PersonasTelefono->exists()) {
			throw new NotFoundException(__('Invalid personas telefono'));
		}
		$this->set('personasTelefono', $this->PersonasTelefono->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PersonasTelefono->create();
			if ($this->PersonasTelefono->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$personas = $this->PersonasTelefono->Persona->find('list');
		$telefonosTipos = $this->PersonasTelefono->TelefonosTipo->find('list');
		$this->set(compact('personas', 'telefonosTipos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PersonasTelefono->id = $id;
		if (!$this->PersonasTelefono->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PersonasTelefono->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->PersonasTelefono->read(null, $id);
		}
		$personas = $this->PersonasTelefono->Persona->find('list');
		$telefonosTipos = $this->PersonasTelefono->TelefonosTipo->find('list');
		$this->set(compact('personas', 'telefonosTipos'));
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
		$this->PersonasTelefono->id = $id;
		if (!$this->PersonasTelefono->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->PersonasTelefono->delete()) {
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
		$this->PersonasTelefono->recursive = 0;
		$this->set('personasTelefonos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->PersonasTelefono->id = $id;
		if (!$this->PersonasTelefono->exists()) {
			throw new NotFoundException(__('Invalid personas telefono'));
		}
		$this->set('personasTelefono', $this->PersonasTelefono->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PersonasTelefono->create();
			if ($this->PersonasTelefono->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$personas = $this->PersonasTelefono->Persona->find('list');
		$telefonosTipos = $this->PersonasTelefono->TelefonosTipo->find('list');
		$this->set(compact('personas', 'telefonosTipos'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->PersonasTelefono->id = $id;
		if (!$this->PersonasTelefono->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PersonasTelefono->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->PersonasTelefono->read(null, $id);
		}
		$personas = $this->PersonasTelefono->Persona->find('list');
		$telefonosTipos = $this->PersonasTelefono->TelefonosTipo->find('list');
		$this->set(compact('personas', 'telefonosTipos'));
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
		$this->PersonasTelefono->id = $id;
		if (!$this->PersonasTelefono->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->PersonasTelefono->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

}
