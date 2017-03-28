<?php
/**
 * PersonasDirecciones Controller
 *
 * @property PersonasDireccion $PersonasDireccion
 */
class PersonasDireccionesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PersonasDireccion->recursive = 0;
		$this->set('personasDirecciones', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PersonasDireccion->id = $id;
		if (!$this->PersonasDireccion->exists()) {
			throw new NotFoundException(__('Invalid personas direccion'));
		}
		$this->set('personasDireccion', $this->PersonasDireccion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PersonasDireccion->create();
			if ($this->PersonasDireccion->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$personas = $this->PersonasDireccion->Persona->find('list');
		$direccionesTipos = $this->PersonasDireccion->DireccionesTipo->find('list');
		$sectores = $this->PersonasDireccion->Sector->find('list');
		$ciudades = $this->PersonasDireccion->Ciudad->find('list');
		$this->set(compact('personas', 'direccionesTipos', 'sectores', 'ciudades'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PersonasDireccion->id = $id;
		if (!$this->PersonasDireccion->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PersonasDireccion->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->PersonasDireccion->read(null, $id);
		}
		$personas = $this->PersonasDireccion->Persona->find('list');
		$direccionesTipos = $this->PersonasDireccion->DireccionesTipo->find('list');
		$sectores = $this->PersonasDireccion->Sector->find('list');
		$ciudades = $this->PersonasDireccion->Ciudad->find('list');
		$this->set(compact('personas', 'direccionesTipos', 'sectores', 'ciudades'));
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
		$this->PersonasDireccion->id = $id;
		if (!$this->PersonasDireccion->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->PersonasDireccion->delete()) {
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
		$this->PersonasDireccion->recursive = 0;
		$this->set('personasDirecciones', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->PersonasDireccion->id = $id;
		if (!$this->PersonasDireccion->exists()) {
			throw new NotFoundException(__('Invalid personas direccion'));
		}
		$this->set('personasDireccion', $this->PersonasDireccion->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PersonasDireccion->create();
			if ($this->PersonasDireccion->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$personas = $this->PersonasDireccion->Persona->find('list');
		$direccionesTipos = $this->PersonasDireccion->DireccionesTipo->find('list');
		$sectores = $this->PersonasDireccion->Sector->find('list');
		$ciudades = $this->PersonasDireccion->Ciudad->find('list');
		$this->set(compact('personas', 'direccionesTipos', 'sectores', 'ciudades'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->PersonasDireccion->id = $id;
		if (!$this->PersonasDireccion->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PersonasDireccion->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->PersonasDireccion->read(null, $id);
		}
		$personas = $this->PersonasDireccion->Persona->find('list');
		$direccionesTipos = $this->PersonasDireccion->DireccionesTipo->find('list');
		$sectores = $this->PersonasDireccion->Sector->find('list');
		$ciudades = $this->PersonasDireccion->Ciudad->find('list');
		$this->set(compact('personas', 'direccionesTipos', 'sectores', 'ciudades'));
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
		$this->PersonasDireccion->id = $id;
		if (!$this->PersonasDireccion->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->PersonasDireccion->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

}
