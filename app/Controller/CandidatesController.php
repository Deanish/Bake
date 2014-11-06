<?php
App::uses('AppController', 'Controller');

	class CandidatesController extends AppController {

		public $components = array('Paginator');
		
		public function index() {
			
		}
		
		public function view() {
			$this->Desire->recursive = 0;
			$this->set('desires', $this->Paginator->paginate());
			$this->Education->recursive = 0;
			$this->set('educations', $this->Paginator->paginate());
			$this->Personal->recursive = 0;
			$this->set('personals', $this->Paginator->paginate());
			$this->Professiional->recursive = 0;
			$this->set('professionals', $this->Paginator->paginate());
		}

	}

?>