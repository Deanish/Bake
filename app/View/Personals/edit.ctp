<div class="personals form">
<?php echo $this->Form->create('Personal'); ?>
	<fieldset>
		<legend><?php echo __('Edit Personal'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('mobile');
		echo $this->Form->input('nationality');
		echo $this->Form->input('location');
		echo $this->Form->input('gender');
		echo $this->Form->input('dob');
		echo $this->Form->input('resume');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Personal.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Personal.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
