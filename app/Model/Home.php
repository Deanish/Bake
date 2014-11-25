<?php
App::uses('AppModel', 'Model');
App::import('Model', 'Featuredjob');

	class Home extends AppModel {

		public $uses = array('Featuredjob');

		public $useTable = 'featuredJobs';

	    public $actsAs = array(
			'Search.Searchable'
		);
	}
?>