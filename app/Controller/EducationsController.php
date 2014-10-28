<?php

class EducationsController extends AppController {
	
	public function add() {

		$this->set('qualificationOptions',array(
			'Null' => ' - Select Highest Qualification - ',
			'BE' => 'BE',
			'BSc' => 'BSc',
			'BCom' => 'BCom',
			'BCA' => 'BCA',
			'MBA' => 'MBA',
			'MCA' => 'MCA',
			'Others' => 'Others'
			));

		$this->set('specializationOptions',array(
			'Null' => ' - Select Specialization - ',
			'Computer Science' => 'Computer Science',
			'Computer Application' => 'Computer Application',
			'Mechanical' => 'Mechanical',
			'Civil' => 'Civil',
			'Electrical' => 'Electrical',
			'Electronics' => 'Electronics',
			'Finance' => 'Finance',
			'Others' => 'Others'
			));

		$this->set('courseOptions',array(
			'Null' => ' - Select Course Type - ',
			'Full Time' => 'Full Time',
			'Part Time' => 'Part Time',
			'Distant Education' => 'Distant Education'
			));

		if ($this->request->is('post')) {
			$this->Education->create();
			$this->request->data['Education']['user_id'] = AuthComponent::user('id');
			if ($this->Education->save($this->request->data)) {
				$this->Session->setFlash(__('The Education data has been saved.'));
				return $this->redirect(array('controller' => 'professionals', 'action' => 'add'));
			} else {
				$this->Session->setFlash(__('The Education data could not be saved. Please, try again.'));
			}
		}

	}

}

?>