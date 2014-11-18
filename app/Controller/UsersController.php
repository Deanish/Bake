<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array(
		'Paginator',
		'Search.Prg'
		);

/**
 * index method
 *
 * @return void
 */

	public function beforeFilter() {

		$this->Auth->allow('add', 'type');
	}

	public function login() {
		if($this->request->is('post')) {
			if($this->Auth->login()) { 
				if(AuthComponent::user('role') == 1) {
					$this->loadModel('Desire');
					$this->loadModel('Educations');
					$this->loadModel('Personal');
					$this->loadModel('Professional');
					if (!$this->Personal->exists((AuthComponent::user('id')))) {
						return $this->redirect(array('controller' => 'personals', 'action' => 'add'));
					}
					elseif (!$this->Educations->exists((AuthComponent::user('id')))) {
						return $this->redirect(array('controller' => 'educations', 'action' => 'add'));
					}
					elseif (!$this->Professional->exists((AuthComponent::user('id')))) {
						return $this->redirect(array('controller' => 'professionals', 'action' => 'add'));
					}
					elseif (!$this->Desire->exists((AuthComponent::user('id')))) {
						return $this->redirect(array('controller' => 'desires', 'action' => 'add'));
					}
					else {
						return $this->redirect(array('controller' => 'candidates', 'action' => 'index'));
					}
				}
				elseif(AuthComponent::user('role') == 2) {
					if(AuthComponent::user('type') == 0) {
						return $this->redirect(array('controller' => 'users', 'action' => 'type'));
					} else {
						return $this->redirect(array('controller' => 'desires', 'action' => 'index'));
					}
				}
				elseif(AuthComponent::user('role') == 3) {
					return $this->redirect(array('controller' => 'admin', 'action' => 'index'));
				}
			}
			$this->Session->setFlash('Invalid Username or Password');
		}
	}

	public function logout() {

		$this->Auth->logout();
		$this->redirect('/');

	}
	
	public function index() {

		if(AuthComponent::user('role') == 1) {
			$this->redirect(array('controller' => 'candidates', 'action' => 'index'));
		}
		if(AuthComponent::user('role') == 2) {
			$this->redirect(array('controller' => 'desires', 'action' => 'index'));
		}

		$this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->User->parseCriteria($this->Prg->parsedParams());
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {

		if(AuthComponent::user('role') == 1) {
			$this->layout = 'candidate';
		}
		if(AuthComponent::user('role') == 2) {
			$this->layout = 'recruiter';
		}

		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		$this->set('roleOptions', array('1' => 'Job Seeker', '2' => 'Recruiter'));

		if ($this->request->is('post')) {
			$this->User->create();
			$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Successfully Registered.'));
				if ($this->request->data['User']['role'] == 2) {
					return $this->redirect(array('controller' => 'users', 'action' => 'type',$this->request->data['User']['id']));
				}
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Upload only jpg, png, gif images. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {

		if(AuthComponent::user('role') == 1) {
				$this->layout = 'candidate';
		}

		if(AuthComponent::user('role') == 2) {
			$this->layout = 'recruiter';
		}

		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}

		if(AuthComponent::user('role') == 1 || AuthComponent::user('role') == 2) {
			if($id == AuthComponent::user("id")) {
				if ($this->request->is(array('post', 'put'))) {
					$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
					if ($this->User->save($this->request->data)) {
						$this->Session->setFlash(__('The user has been updated.'));
						return $this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('The user could not be updated. Please, try again.'));
					}
				} else {
					$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
					$this->request->data = $this->User->find('first', $options);
				}
			}
		} else {
			if ($this->request->is(array('post', 'put'))) {
				$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been updated.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The user could not be updated. Please, try again.'));
				}
			} else {
				$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
				$this->request->data = $this->User->find('first', $options);
			}			
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {

		if(AuthComponent::user('role') == 1) {
			$this->redirect(array('controller' => 'candidates', 'action' => 'index'));
		}
		if(AuthComponent::user('role') == 2) {
			$this->redirect(array('controller' => 'desires', 'action' => 'index'));
		}
		
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function type() {

		if(AuthComponent::user('role') == 1) {
			$this->redirect(array('controller' => 'candidates', 'action' => 'index'));
		}
		if(AuthComponent::user('role') == 2) {
			$this->layout = 'recruiter';
		}		

		$this->set('typeOptions', array('1' => 'Basic', '2' => 'Premium'));

		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['User']['id'] = AuthComponent::user('id');
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Account type has been updated.'));
				return $this->redirect(array('controller' => 'desires', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('Acount type could not update. Please, try again.'));
			}
		}

	}

}	