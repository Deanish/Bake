<?php
App::uses('AppController', 'Controller');

class PersonalsController extends AppController {

	public $components = array('Paginator');
	
	public function add($id = null) {

		$this->set('nationalityOptions', array(
			'Null' => ' - Select Nationality - ', 
			'India' => 'India', 
			'Others' => 'Others'
			));
		$this->set('locationOptions', array(
			'Null' => ' - Select Current Location - ', 
			'Bangalore' => 'Bangalore', 
			'Delhi' => 'Delhi', 
			'Mumbai' => 'Mumbai', 
			'Kolkata' => 'Kolkata', 
			'Chennai' => 'Chennai', 
			'Others' => 'Others'
			));
		$this->set('genderOptions', array(
			'Null' => ' - Select Gender - ',
			'male' => 'Male', 
			'female' => 'Female'
			));

/*		if ($this->request->is('post')) {
			$this->Personal->create();
			$this->request->data['Personal']['user_id'] = AuthComponent::user('id');
			if ($this->Personal->save($this->request->data)) {
				$this->Session->setFlash(__('The personal data has been saved.'));
				return $this->redirect(array('controller' => 'professionals', 'action' => 'add'));
			} else {
				$this->Session->setFlash(__('The personal data could not be saved. Please, try again.'));
			}
		}*/

		

		if (!$this->Personal->exists($id)) {
			$this->Personal->create();
			$this->request->data['Personal']['id'] = AuthComponent::user('id');
			if ($this->Personal->save($this->request->data)) {
				$this->Session->setFlash(__('The personal details has been created.'));
				return $this->redirect(array('controller' => 'professionals', 'action' => 'add'));
			} else {
				$this->Session->setFlash(__('The personal data could not be saved. Please, try again.'));
			}
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Personal->save($this->request->data)) {
				$this->Session->setFlash(__('The personal details has been saved.'));
				return $this->redirect(array('controller' => 'professionals', 'action' => 'add'));
			} else {
				$this->Session->setFlash(__('The personal details could not be saved. Please, try again.'));
			}
		} /*else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}*/
		
	}
	
}

?>