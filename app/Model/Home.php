<?php
App::uses('AppModel', 'Model');
App::import('Model', 'Featuredjob');

	class Home extends AppModel {

		public $uses = array('Featuredjob');

		public $useTable = 'featuredjobs';

	    public $actsAs = array(
			'Search.Searchable'
		);
	}
?>