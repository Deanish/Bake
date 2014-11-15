<?php

class DesiresController extends AppController {

	public $name = 'Desires'; 

	public $components = array(
		'Paginator',
		'Search.Prg'
	);

	public $presetVars = array( 
		array('field' => 'skills', 'type' => 'value'),
		array('field' => 'location', 'type' => 'value'),
		array('field' => 'experience', 'type' => 'value')
	);
	
	public function add() {

		$this->layout = 'candidate';

		if(AuthComponent::user('role') == 2) {
			$this->redirect(array('controller' => 'desires', 'action' => 'index'));
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
			'5-10Years' => '5-10Years', 
			'> 10 Years' => '> 10 Years'
			));
		$this->set('industryOptions', array(
			'' => ' - Desired Industry Type - ', 
			'Accounts Jobs' => 'Accounts Jobs', 
			'Bank Jobs' => 'Bank Jobs', 
			'BPO Jobs' => 'BPO Jobs', 
			'HR Jobs' => 'HR Jobs', 
			'IT Jobs' => 'IT Jobs', 
			'Others' => 'Others'
			));
		$this->set('jobOptions', array(
			'' => ' - Desired Job Type - ', 
			'Software' => 'Software', 
			'Support' => 'Support', 
			'Product' => 'Product', 
			'Service' => 'Service',  
			'Others' => 'Others'
			));
		$this->set('shiftOptions', array(
			'' => ' - Desired Shift Type - ', 
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

	public function index() {

	$this->layout = 'recruiter';

	if(AuthComponent::user('role') == 1) {
		$this->redirect(array('controller' => 'candidates', 'action' => 'index'));
	}	

	$this->Prg->commonProcess();
    $this->Paginator->settings['conditions'] = $this->Desire->parseCriteria($this->Prg->parsedParams());
    $this->set('desires', $this->Paginator->paginate());

	$this->set('locationOptions', array(
		'' => ' - Search by Location - ', 
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
		'' => ' - Search by Experience Required - ', 
		'0-2 Years' => '0-2 Years', 
		'2-5 Years' => '2-5 Years', 
		'5-10Years' => '5-10Years', 
		'> 10 Years' => '> 10 Years'
		));
	
	}

}

?>