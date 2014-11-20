<?php

class HomeController extends AppController {

	public function beforeFilter() {

		$this->Auth->allow('index');
	}
	
	public function index() {

		if (AuthComponent::user('role') == 1) {
			$this->layout = 'candidate';
		}if (AuthComponent::user('role') == 2) {
			$this->layout = 'recruiter';
		}if (AuthComponent::user('role') == 3) {
			$this->layout = 'admin';
		}
		
		$this->set('locationOptions', array(
			'' => ' - Desired Job Location - ', 
			'Bangalore' => 'Bangalore', 
			'Delhi' => 'Delhi', 
			'Mumbai' => 'Mumbai', 
			'Kolkata' => 'Kolkata', 
			'Chennai' => 'Chennai',
			'Gurgaon' => 'Gurgaon',
			'Pune' => 'Pune', 
			'Others' => 'Others'
			));
		$this->set('experienceOptions', array(
			'' => ' - Select Experience - ', 
			'0-2 Years' => '0-2 Years', 
			'2-5 Years' => '2-5 Years', 
			'5-10 Years' => '5-10 Years', 
			'> 10 Years' => '> 10 Years'
			));
		
	}

}

?>