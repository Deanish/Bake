<div class="row">
	<div class="col-md-4" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title">User Login</h3>
			</div>
			<div style="padding: 10px;">
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
					echo $this->Form->submit('Sign in',array('class' => 'btn btn-primary'));
					echo "<br />";
					echo $this->html->link('New User? Register',array('controller' => 'users', 'action' => 'add'),array('class' => 'btn btn-success'));
					echo $this->Form->end();

				?>
			</div>
		</div>
	</div>
</div>