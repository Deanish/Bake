<?php

class EducationsController extends AppController {
	
	public function add() {

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

		$this->set('qualificationOptions',array(
			'' => ' - Select Highest Qualification - ',
			'Diploma' => 'Diploma',
			'BE' => 'BE',
			'BSc' => 'BSc',
			'BCom' => 'BCom',
			'BCA' => 'BCA',
			'MBA' => 'MBA',
			'MCA' => 'MCA',
			'MCom' => 'MCom',
			'MSc' => 'MSc',
			'Others' => 'Others'
			));

		$this->set('specializationOptions',array(
			'' => ' - Select Specialization - ',
			'Computer Application' => 'Computer Application',
			'Computer Science' => 'Computer Science',
			'Civil' => 'Civil',
			'Electrical' => 'Electrical',
			'Electronics' => 'Electronics',
			'Finance' => 'Finance',
			'Information Science' => 'Information Science',
			'Mechanical' => 'Mechanical',
			'Others' => 'Others'
			));

		$this->set('courseOptions',array(
			'' => ' - Select Course Type - ',
			'Full Time' => 'Full Time',
			'Part Time' => 'Part Time',
			'Distant Education' => 'Distant Education'
			));

		if ($this->request->is('post')) {
			$this->Education->create();
			$this->request->data['Education']['id'] = AuthComponent::user('id');
			$this->request->data['Education']['user_id'] = AuthComponent::user('id');
			if ($this->Education->save($this->request->data)) {
				$this->Session->setFlash(__('The Education data has been updated.'));
				return $this->redirect(array('controller' => 'professionals', 'action' => 'add'));
			} else {
				$this->Session->setFlash(__('The Education data could not be updated. Please, try again.'));
			}
		}

	}

}

?>