<?php

	class PostsController extends AppController {

		public function add() {	

			$this->set('experienceOptions', array(
				'Null' => ' - Select Experience Required - ', 
				'0-2 Years' => '0-2 Years', 
				'2-5 Years' => '2-5 Years', 
				'5-10Years' => '5-10Years', 
				'> 10 Years' => '> 10 Years'
				));
			$this->set('locationOptions', array(
				'Null' => ' - Select Job Location - ', 
				'Bangalore' => 'Bangalore', 
				'Delhi' => 'Delhi', 
				'Mumbai' => 'Mumbai', 
				'Kolkata' => 'Kolkata', 
				'Chennai' => 'Chennai', 
				'Others' => 'Others'
				));
			$this->set('industryOptions', array(
				'Null' => ' - Select Industry Type - ', 
				'Accounts Jobs' => 'Accounts Jobs', 
				'Bank Jobs' => 'Bank Jobs', 
				'BPO Jobs' => 'BPO Jobs', 
				'HR Jobs' => 'HR Jobs', 
				'IT Jobs' => 'IT Jobs', 
				'Others' => 'Others'
				));

			if($this->request->is('post')) {
				$this->Post->create('Companies', array('action' => 'add'));
				$this->request->data['Post']['user_id'] = AuthComponent::user('id');
				$this->request->data['Post']['visible'] = 1;
				if($this->Post->save($this->request->data)) {
					$this->Session->write('post_id', $this->request->data['Post']['id']);
					$this->Session->setFlash(__('Please fill company details to post job'));
					return $this->redirect(array('controller' => 'companies', 'action' => 'add'));
				}
				else {
					$this->Session->setFlash(__('This post could not be saved. Please, try again.'));
				}
			}

		}
	}

?>