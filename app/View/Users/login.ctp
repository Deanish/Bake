<h1>Login</h1>

<?php

	echo $this->Form->create('User');
	echo $this->Form->input('username', array(
		'class' => 'form-control',
		'placeholder' => 'Email Address',
		'label' => ''
		));
	echo $this->Form->input('password', array(
		'class' => 'form-control',
		'placeholder' => 'Password',
		'label' => ''
		));
	echo "<br />";
	echo $this->Form->submit('Sign in',array('class' => 'btn btn-success'));
	echo $this->Form->end();

?>