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

			if (AuthComponent::user('role') == 1) {
				$this->layout = 'candidate';
			}if (AuthComponent::user('role') == 2) {
				$this->layout = 'recruiter';
			}if (AuthComponent::user('role') == 3) {
				$this->layout = 'admin';
			}			

			if(AuthComponent::user('role') == 2) {
				$this->redirect(array('controller' => 'desires', 'action' => 'index'));
			}			

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
				'5-10 Years' => '5-10 Years', 
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

			if (AuthComponent::user('role') == 1) {
				$this->layout = 'candidate';
			}if (AuthComponent::user('role') == 2) {
				$this->layout = 'recruiter';
			}if (AuthComponent::user('role') == 3) {
				$this->layout = 'admin';
			}
			

			if(AuthComponent::user('role') == 2) {
				$this->redirect(array('controller' => 'desires', 'action' => 'index'));
			}
			
			if (!$this->Candidate->exists($id)) {
				throw new NotFoundException(__('Invalid Job'));
			}		
			$this->loadModel('Interest');
			$options = array('conditions' => array('Candidate.' . $this->Candidate->primaryKey => $id));
			$this->set('user', $this->Candidate->find('first', $options));
/*		$options = array('conditions' => array('Interest.' . $this->Interest->primaryKey => $id));
		$this->set('interests', $this->Interest->find('first', $options));
			if ($this->request->is('post')) {
				foreach ($interests as $interest) {
					if(($interest['Interest']['user_id']) == AuthComponent::user('id')) {
						if(($interest['Interest']['post_id']) == $this->request->data['Interest']['post_id']) {
							$this->Session->setFlash(__('You have already applied for this job.')); 
						}
					} else {*/
						if ($this->request->is('post')) {
						$this->Interest->create();
						$this->request->data['Interest']['user_id'] = AuthComponent::user('id');
						if ($this->Interest->save($this->request->data)) {
							$this->Session->setFlash(__('Successfully applied'));
							return $this->redirect(array('controller' => 'candidates', 'action' => 'index'));
						} else {
							$this->Session->setFlash(__('Failed. Please, try again.'));
						}
					}
/*					}
				}
			}*/
		}

	}

?>