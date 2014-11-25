<?php 
App::uses('AppController', 'Controller');

	class FeaturedController extends AppController {

		public function job() {

			if (AuthComponent::user('role') == 1) {
				$this->layout = 'candidate';
			}if (AuthComponent::user('role') == 2) {
				$this->layout = 'recruiter';
			}if (AuthComponent::user('role') == 3) {
				$this->layout = 'admin';
			}

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
			if(AuthComponent::user('role') == 2) {
				$this->redirect(array('controller' => 'desires', 'action' => 'index'));
			}

			$this->loadModel('Candidate');
			$options = array('conditions' => array('Candidate.' . $this->Candidate->primaryKey => $id));
			$this->set('user', $this->Candidate->find('first', $options));
			if ($this->request->is('post')) {
				$this->Featuredjob->create();
				$this->request->data['Featuredjob']['user_id'] = AuthComponent::user('id');
				if ($this->Featuredjob->save($this->request->data)) {
					$this->Session->setFlash(__('Featured job has been added'));
					return $this->redirect(array('controller' => 'featured', 'action' => 'job'));
				} else {
					$this->Session->setFlash(__('Failed. Please, try again.'));
				}
			}
		}

		public function delete($id = null) {

			$this->loadModel('Featuredjob');

			if(AuthComponent::user('role') == 1) {
				$this->redirect(array('controller' => 'candidates', 'action' => 'index'));
			}
			if(AuthComponent::user('role') == 2) {
				$this->redirect(array('controller' => 'desires', 'action' => 'index'));
			}
			
			$this->Featuredjob->id = $id;
			if (!$this->Featuredjob->exists()) {
				throw new NotFoundException(__('Invalid Job'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->Featuredjob->delete()) {
				$this->Session->setFlash(__('The featured job has been deleted.'));
			} else {
				$this->Session->setFlash(__('The featured job could not be deleted. Please, try again.'));
			}
			return $this->redirect($this->referer());
		}

	}	

?>