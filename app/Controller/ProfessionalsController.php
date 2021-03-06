<?php

class ProfessionalsController extends AppController {
	
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

		$this->set('statusOptions',array(
			'' => ' - Employee Current Status - ',
			'Fresher' => 'Fresher',
			'Experienced' => 'Experienced'
			));

		$this->set('yearsOptions',array(
			'' => ' - Years - ',
			'0' => '0',
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
			'6' => '6',
			'7' => '7',
			'8' => '8',
			'9' => '9',
			'10' => '10',
			'> 10' => '> 10'
			));

		$this->set('monthsOptions',array(
			'' => ' - Months - ',
			'0' => '0',
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
			'6' => '6',
			'7' => '7',
			'8' => '8',
			'9' => '9',
			'10' => '10',
			'11' => '11',
			'12' => '12'
			));

		if ($this->request->is('post')) {
			$this->Professional->create();
			$this->request->data['Professional']['id'] = AuthComponent::user('id');
			$this->request->data['Professional']['user_id'] = AuthComponent::user('id');
			if ($this->Professional->save($this->request->data)) {
				$this->Session->setFlash(__('The Professional data has been updated.'));
				return $this->redirect(array('controller' => 'desires', 'action' => 'add'));
			} else {
				$this->Session->setFlash(__('The Professional data could not be updated. Please, try again.'));
			}
		}

	}

}

?>