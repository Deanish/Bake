<?php

class HomeController extends AppController {

	public function beforeFilter() {

		$this->Auth->allow('index');
	}
	
	public function index() {
		
	}

}

?>