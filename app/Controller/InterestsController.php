<?php
App::uses('AppController', 'Controller');

	class InterestsController extends AppController {

		public $components = array('Paginator');

		public function index() {

			if(AuthComponent::user('role') == 1) {
				$this->layout = 'candidate';
			}
			if(AuthComponent::user('role') == 2) {
				$this->layout = 'recruiter';
			}	
					
			$this->loadModel('Post');
			$this->loadModel('User');
			$this->Interest->recursive = 0;
			$this->set('interests', $this->Paginator->paginate());
			$this->set('posts', $this->Paginator->paginate());
		}

		public function delete($id = null) {
			$this->Interest->id = $id;
			if (!$this->Interest->exists()) {
				throw new NotFoundException(__('Invalid Job'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->Interest->delete()) {
				$this->Session->setFlash(__('The job has been deleted.'));
			} else {
				$this->Session->setFlash(__('The job could not be deleted. Please, try again.'));
			}
			return $this->redirect(array('action' => 'index'));
		}

	}