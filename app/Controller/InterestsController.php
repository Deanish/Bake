<?php
App::uses('AppController', 'Controller');

	class InterestsController extends AppController {

		public $components = array('Paginator');

		public function index() {
			$this->loadModel('Post');
			$this->Interest->recursive = 0;
			$this->set('interests', $this->Paginator->paginate());
			$this->set('posts', $this->Paginator->paginate());
		}

	}