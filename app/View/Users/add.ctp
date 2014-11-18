<div class="row">
	<div class="col-md-4" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">New User Register</h3>
			</div>
			<div style="padding: 10px;">
				<?php echo $this->Form->create('User', array('type' => 'file')); ?>
					<fieldset>
						<?php
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
									'label' => ''
									));
							echo "<label>Upload profile picture</label>";
							echo $this->Form->file('photo', array(
									'class' => 'form-control'
									));
							echo $this->Form->input('role', array('options' => $roleOptions,
									'class' => 'form-control',
									'label' => 'Role',
									'id' => 'role'
									));
							echo "<br />";
							echo $this->Form->submit('Create an Account',array('class' => 'btn btn-success'));
						?>
					</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
	<div class="col-md-8" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">Benefits of Registration for Job Seeker</h3>
			</div>

			<div style="padding: 10px;">
				<p>
					1 Some description why user has to register in this job portal.<br />
					2 <br />
					3 <br /> 
					4 <br />
					5 <br />
					6 <br />
					7 <br />
					8 <br />
					9 <br />
					10 <br />
					11 <br />
					12 <br />
					13 <br />
					14 <br />
					15 <br />
					16 <br />
					17 <br />
					18 <br />
					19
				</p>
			</div>
		</div>
	</div>
</div>

<script>
	$("#role").change(function() {
    var val = $(this).val();
    if(val == "Recruiter") {
        $("#type").prop("disabled", false)
    } else {
        $("#type").prop("disabled", true)
    }
});
</script>
