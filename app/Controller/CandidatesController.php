<?php
App::uses('AppController', 'Controller');

	class CandidatesController extends AppController {

		public $name = 'Candidates'; 

		public $components = array(
			'Paginator',
			'Search.Prg'
		);

		public $presetVars = array( 
			array('field' => 'title', 'type' => 'value'),
			array('field' => 'location', 'type' => 'value'),
			array('field' => 'experience', 'type' => 'value')
		);
		
		public function index() {

			$this->Prg->commonProcess();
	        $this->Paginator->settings['conditions'] = $this->Candidate->parseCriteria($this->Prg->parsedParams());
	        $this->set('candidates', $this->Paginator->paginate());

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

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
		public function view($id = null) {
			if (!$this->Candidate->exists($id)) {
				throw new NotFoundException(__('Invalid Job'));
			}
			$options = array('conditions' => array('Candidate.' . $this->Candidate->primaryKey => $id));
			$this->set('user', $this->Candidate->find('first', $options));
		}

	}

?>