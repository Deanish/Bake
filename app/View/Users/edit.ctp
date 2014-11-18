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
	<?php 
      $path = $this->webroot."files/user/photo/"; 
      $dir = AuthComponent::user('photo_dir');
      $img = AuthComponent::user('photo');
    ?>
    <div class="col-md-4 col-md-offset-3" style="padding-top: 10px;">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
        <h3 class="panel-title text-center">Profile Picture</h3>
        </div>
        <div class="panel-body">
          <img class="pull-right" src="<?php echo $path.$dir.'/'.$img; ?>" width="327px" height="200px">
        </div>
      </div>
    </div>	
</div>