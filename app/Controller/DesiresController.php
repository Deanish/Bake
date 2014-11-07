<?php

class DesiresController extends AppController {
	
	public function add() {

		$this->set('locationOptions', array(
			'Null' => ' - Desired Job Location - ', 
			'Bangalore' => 'Bangalore', 
			'Delhi' => 'Delhi', 
			'Mumbai' => 'Mumbai', 
			'Kolkata' => 'Kolkata', 
			'Chennai' => 'Chennai', 
			'Others' => 'Others'
			));
		$this->set('industryOptions', array(
			'Null' => ' - Desired Industry Type - ', 
			'Accounts Jobs' => 'Accounts Jobs', 
			'Bank Jobs' => 'Bank Jobs', 
			'BPO Jobs' => 'BPO Jobs', 
			'HR Jobs' => 'HR Jobs', 
			'IT Jobs' => 'IT Jobs', 
			'Others' => 'Others'
			));
		$this->set('jobOptions', array(
			'Null' => ' - Desired Job Type - ', 
			'Software' => 'Software', 
			'Support' => 'Support', 
			'Product' => 'Product', 
			'Service' => 'Service',  
			'Others' => 'Others'
			));
		$this->set('shiftOptions', array(
			'Null' => ' - Desired Shift Type - ', 
			'Full Time' => 'Full Time', 
			'Shift Basis' => 'Shift Basis', 
			'Part Time' => 'Part Time'
			));

		if ($this->request->is('post')) {
			$this->Desire->create();
			$this->request->data['Desire']['id'] = AuthComponent::user('id');
			$this->request->data['Desire']['user_id'] = AuthComponent::user('id');
			if ($this->Desire->save($this->request->data)) {
				$this->Session->setFlash(__('The Desired data has been saved.'));
				return $this->redirect(array('controller' => 'candidates', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Desired data could not be saved. Please, try again.'));
			}
		}

	}

}

?>