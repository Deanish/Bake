<div class="personals view">
<h2><?php echo __('Personal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personal['User']['id'], array('controller' => 'users', 'action' => 'view', $personal['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['nationality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personal'), array('action' => 'edit', $personal['Personal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personal'), array('action' => 'delete', $personal['Personal']['id']), array(), __('Are you sure you want to delete # %s?', $personal['Personal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
