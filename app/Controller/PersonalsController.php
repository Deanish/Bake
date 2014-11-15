<?php
App::uses('AppController', 'Controller');

class PersonalsController extends AppController {

	public $components = array('Paginator');
	
	public function add($id = null) {

		$this->layout = 'candidate';

		if(AuthComponent::user('role') == 2) {
			$this->redirect(array('controller' => 'desires', 'action' => 'index'));
		}		

		$this->set('nationalityOptions', array(
			'' => ' - Select Nationality - ', 
			'India' => 'India', 
			'Others' => 'Others'
			));
		$this->set('locationOptions', array(
			'' => ' - Select Current Location - ', 
			'Bangalore' => 'Bangalore', 
			'Delhi' => 'Delhi', 
			'Mumbai' => 'Mumbai', 
			'Kolkata' => 'Kolkata', 
			'Chennai' => 'Chennai',
			'Gurgaon' => 'Gurgaon',
			'Pune' => 'Pune',
			'Others' => 'Others'
			));
		$this->set('genderOptions', array(
			'' => ' - Select Gender - ',
			'male' => 'Male', 
			'female' => 'Female'
			));

		if ($this->request->is('post')) {
			$this->Personal->create();
			$this->request->data['Personal']['id'] = AuthComponent::user('id');
			$this->request->data['Personal']['user_id'] = AuthComponent::user('id');
			if ($this->Personal->save($this->request->data)) {
				$this->Session->setFlash(__('The personal data has been saved.'));
				return $this->redirect(array('controller' => 'educations', 'action' => 'add'));
			} else {
				$this->Session->setFlash(__('The personal data could not be saved. Please, try again.'));
			}
		}
	}
	
}

?>