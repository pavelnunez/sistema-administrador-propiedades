<?php
/**
 * PropiedadesDirecciones Controller
 *
 * @property PropiedadesDireccion $PropiedadesDireccion
 */
class PropiedadesDireccionesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PropiedadesDireccion->recursive = 0;
		$this->set('propiedadesDirecciones', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PropiedadesDireccion->id = $id;
		if (!$this->PropiedadesDireccion->exists()) {
			throw new NotFoundException(__('Invalid propiedades direccion'));
		}
		$this->set('propiedadesDireccion', $this->PropiedadesDireccion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PropiedadesDireccion->create();
			if ($this->PropiedadesDireccion->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$propiedades = $this->PropiedadesDireccion->Propiedad->find('list');
		$direccionesTipos = $this->PropiedadesDireccion->DireccionesTipo->find('list');
		$sectores = $this->PropiedadesDireccion->Sector->find('list');
		$ciudades = $this->PropiedadesDireccion->Ciudad->find('list');
		$this->set(compact('propiedades', 'direccionesTipos', 'sectores', 'ciudades'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PropiedadesDireccion->id = $id;
		if (!$this->PropiedadesDireccion->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropiedadesDireccion->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->PropiedadesDireccion->read(null, $id);
		}
		$propiedades = $this->PropiedadesDireccion->Propiedad->find('list');
		$direccionesTipos = $this->PropiedadesDireccion->DireccionesTipo->find('list');
		$sectores = $this->PropiedadesDireccion->Sector->find('list');
		$ciudades = $this->PropiedadesDireccion->Ciudad->find('list');
		$this->set(compact('propiedades', 'direccionesTipos', 'sectores', 'ciudades'));
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
		$this->PropiedadesDireccion->id = $id;
		if (!$this->PropiedadesDireccion->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->PropiedadesDireccion->delete()) {
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
		$this->PropiedadesDireccion->recursive = 0;
		$this->set('propiedadesDirecciones', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->PropiedadesDireccion->id = $id;
		if (!$this->PropiedadesDireccion->exists()) {
			throw new NotFoundException(__('Invalid propiedades direccion'));
		}
		$this->set('propiedadesDireccion', $this->PropiedadesDireccion->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PropiedadesDireccion->create();
			if ($this->PropiedadesDireccion->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		}
		$propiedades = $this->PropiedadesDireccion->Propiedad->find('list');
		$direccionesTipos = $this->PropiedadesDireccion->DireccionesTipo->find('list');
		$sectores = $this->PropiedadesDireccion->Sector->find('list');
		$ciudades = $this->PropiedadesDireccion->Ciudad->find('list');
		$this->set(compact('propiedades', 'direccionesTipos', 'sectores', 'ciudades'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->PropiedadesDireccion->id = $id;
		if (!$this->PropiedadesDireccion->exists()) {
			throw new NotFoundException(__('Identificador Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropiedadesDireccion->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado. Por favor, intentarlo de nuevo.'));
			}
		} else {
			$this->request->data = $this->PropiedadesDireccion->read(null, $id);
		}
		$propiedades = $this->PropiedadesDireccion->Propiedad->find('list');
		$direccionesTipos = $this->PropiedadesDireccion->DireccionesTipo->find('list');
		$sectores = $this->PropiedadesDireccion->Sector->find('list');
		$ciudades = $this->PropiedadesDireccion->Ciudad->find('list');
		$this->set(compact('propiedades', 'direccionesTipos', 'sectores', 'ciudades'));
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
		$this->PropiedadesDireccion->id = $id;
		if (!$this->PropiedadesDireccion->exists()) {
			throw new NotFoundException(__('Identificador invalido'));
		}
		if ($this->PropiedadesDireccion->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El registro no pudo ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}

}
