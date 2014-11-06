<h1>Manage Jobs</h1>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('skills'); ?></th>
			<th><?php echo $this->Paginator->sort('qualification'); ?></th>
			<th><?php echo $this->Paginator->sort('salary'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('company'); ?></th>
			<th><?php echo $this->Paginator->sort('person'); ?></th>
			<th><?php echo $this->Paginator->sort('contact'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($posts as $post): ?>
		<?php if(($post['Post']['user_id']) == AuthComponent::user('id')): ?>
			<tr>
				<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['skills']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['qualification']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['salary']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['location']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['companyName']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['person']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['contact']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
				</td>
			</tr>
		<?php endif; ?>
	<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>