<?php

	class CompaniesController extends AppController {

		public function add() {

			if($this->request->is('post')) {
				$this->Company->create();
				$this->request->data['Company']['user_id'] = AuthComponent::user('id');
				$this->request->data['Company']['post_id'] = $this->request->data['Post']['id'];
				if($this->Company->save($this->request->data)) {
					$this->Session->setFlash(__('Job details has been sent to admin to approve'));
					return $this->redirect(array('controller' => 'personals', 'action' => 'add'));
				}
				else {
					$this->Session->setFlash(__('This job post could not be saved. Please, try again.'));
				}
			}

		}
	}

?>