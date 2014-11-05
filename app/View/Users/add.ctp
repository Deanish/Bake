<div class="users form">
<?php echo $this->Form->create('User', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username', array(
				'class' => 'form-control',
				'placeholder' => 'Email Address',
				'label' => ''
				));
		echo $this->Form->input('firstname', array(
				'class' => 'form-control',
				'placeholder' => 'First Name',
				'label' => ''
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
		// echo $this->Form->file('photo');
		echo $this->Form->input('role', array('options' => $roleOptions,
				'class' => 'form-control',
				'label' => 'Role'
				));
		echo "<br />";
		echo $this->Form->submit('Create an Account',array('class' => 'btn btn-success'));
	?>
	</fieldset>
	<?php echo $this->Form->end(); ?>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Desires'), array('controller' => 'desires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Desire'), array('controller' => 'desires', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educations'), array('controller' => 'educations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education'), array('controller' => 'educations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Featuredcompanies'), array('controller' => 'featuredcompanies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Featuredcompany'), array('controller' => 'featuredcompanies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Featuredjobs'), array('controller' => 'featuredjobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Featuredjob'), array('controller' => 'featuredjobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professionals'), array('controller' => 'professionals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professional'), array('controller' => 'professionals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Refers'), array('controller' => 'refers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Refer'), array('controller' => 'refers', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
