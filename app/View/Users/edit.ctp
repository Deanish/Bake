<div class="row">
	<div class="col-md-4" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">Account Settings</h3>
			</div>
			<div style="padding: 10px;">
				<?php echo $this->Form->create('User'); ?>
					<fieldset>
						<?php
							echo $this->Form->input('id');
							echo $this->Form->input('username', array(
									'class' => 'form-control',
									'placeholder' => 'Email Address',
									'label' => ''
									));
							echo $this->Form->input('firstname', array(
									'class' => 'form-control',
									'placeholder' => 'First Name',
									'label' => '',
									'maxlength' => '12'
									));
							echo $this->Form->input('lastname', array(
									'class' => 'form-control',
									'placeholder' => 'Last Name',
									'label' => ''
									));
							echo $this->Form->input('password', array(
									'class' => 'form-control',
									'placeholder' => 'Password',
									'value' => '',
									'label' => ''
									));
							echo "<br />";
							echo $this->Form->submit('Update Account',array('class' => 'btn btn-success'));
						?>
					</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
</div>