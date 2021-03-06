<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */

	class PostsController extends AppController {

		public $components = array(
			'Paginator',
			'Search.Prg'
			);

		public function index() {

			if (AuthComponent::user('role') == 1) {
				$this->layout = 'candidate';
			}if (AuthComponent::user('role') == 2) {
				$this->layout = 'recruiter';
			}if (AuthComponent::user('role') == 3) {
				$this->layout = 'admin';
			}

			if(AuthComponent::user('role') == 1) {
				$this->redirect(array('controller' => 'candidates', 'action' => 'index'));
			}

			$this->Post->recursive = 0;
			$this->set('posts', $this->Paginator->paginate());
		}

		public function add() {	

			if (AuthComponent::user('role') == 1) {
				$this->layout = 'candidate';
			}if (AuthComponent::user('role') == 2) {
				$this->layout = 'recruiter';
			}if (AuthComponent::user('role') == 3) {
				$this->layout = 'admin';
			}

			if(AuthComponent::user('role') == 1) {
				$this->redirect(array('controller' => 'candidates', 'action' => 'index'));
			}

			$this->Post->recursive = 0;
			$this->set('posts', $this->Paginator->paginate());

			$this->set('experienceOptions', array(
				'' => ' - Select Experience Required - ', 
				'0-2 Years' => '0-2 Years', 
				'2-5 Years' => '2-5 Years', 
				'5-10 Years' => '5-10 Years', 
				'> 10 Years' => '> 10 Years'
				));
			$this->set('locationOptions', array(
				'' => ' - Select Job Location - ', 
				'Bangalore' => 'Bangalore', 
				'Delhi' => 'Delhi', 
				'Mumbai' => 'Mumbai', 
				'Kolkata' => 'Kolkata', 
				'Chennai' => 'Chennai',
				'Gurgaon' => 'Gurgaon',
				'Pune' => 'Pune', 
				'Others' => 'Others'
				));
			$this->set('industryOptions', array(
				'' => ' - Select Industry Type - ', 
				'Accounts Jobs' => 'Accounts Jobs', 
				'Bank Jobs' => 'Bank Jobs', 
				'BPO Jobs' => 'BPO Jobs', 
				'HR Jobs' => 'HR Jobs', 
				'IT Jobs' => 'IT Jobs', 
				'Others' => 'Others'
				));

			if($this->request->is('post')) {
				$this->Post->create();
				$this->request->data['Post']['user_id'] = AuthComponent::user('id');
				$this->request->data['Post']['visible'] = 1;
				if($this->Post->save($this->request->data)) {
					$this->Session->setFlash(__('Job posted successfully'));
					return $this->redirect(array('controller' => 'posts', 'action' => 'index'));
				}
				else {
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

		if (AuthComponent::user('role') == 1) {
			$this->layout = 'candidate';
		}if (AuthComponent::user('role') == 2) {
			$this->layout = 'recruiter';
		}if (AuthComponent::user('role') == 3) {
			$this->layout = 'admin';
		}

		if(AuthComponent::user('role') == 1) {
			$this->redirect(array('controller' => 'candidates', 'action' => 'index'));
		}

		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid Job'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The job has been edited.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}	

		$this->set('experienceOptions', array(
			'' => ' - Select Experience Required - ', 
			'0-2 Years' => '0-2 Years', 
			'2-5 Years' => '2-5 Years', 
			'5-10Years' => '5-10Years', 
			'> 10 Years' => '> 10 Years'
			));
		$this->set('locationOptions', array(
			'' => ' - Select Job Location - ', 
			'Bangalore' => 'Bangalore', 
			'Delhi' => 'Delhi', 
			'Mumbai' => 'Mumbai', 
			'Kolkata' => 'Kolkata', 
			'Chennai' => 'Chennai', 
			'Others' => 'Others'
			));
		$this->set('industryOptions', array(
			'' => ' - Select Industry Type - ', 
			'Accounts Jobs' => 'Accounts Jobs', 
			'Bank Jobs' => 'Bank Jobs', 
			'BPO Jobs' => 'BPO Jobs', 
			'HR Jobs' => 'HR Jobs', 
			'IT Jobs' => 'IT Jobs', 
			'Others' => 'Others'
			));
		$this->set('visibleOptions', array('1' => 'Hidden', '2' => 'Visible'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
		public function delete($id = null) {

			if (AuthComponent::user('role') == 1) {
				$this->layout = 'candidate';
			}if (AuthComponent::user('role') == 2) {
				$this->layout = 'recruiter';
			}if (AuthComponent::user('role') == 3) {
				$this->layout = 'admin';
			}

			if(AuthComponent::user('role') == 1) {
				$this->redirect(array('controller' => 'candidates', 'action' => 'index'));
			}

			$this->Post->id = $id;
			if (!$this->Post->exists()) {
				throw new NotFoundException(__('Invalid job'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->Post->delete()) {
				$this->Session->setFlash(__('The job has been deleted.'));
			} else {
				$this->Session->setFlash(__('The job could not be deleted. Please, try again.'));
			}
			return $this->redirect(array('action' => 'index'));
		}

	}

?>