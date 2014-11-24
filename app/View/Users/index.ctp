<div class="row">
	<div class="col-md-12" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">User Details (Role: 1 = Jobseeker, 2 = Recruiter, 3 = admin)</h3>
			</div>
			<div style="padding: 10px;">
				<table cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('username'); ?></th>
						<th><?php echo $this->Paginator->sort('firstname'); ?></th>
						<th><?php echo $this->Paginator->sort('lastname'); ?></th>
						<th><?php echo $this->Paginator->sort('image'); ?></th>
						<th><?php echo $this->Paginator->sort('role'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
					<?php foreach ($users as $user): ?>
						<tr>
							<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
							<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
							<td><?php echo h($user['User']['firstname']); ?>&nbsp;</td>
							<td><?php echo h($user['User']['lastname']); ?>&nbsp;</td>
							<td><?php echo h($user['User']['photo']); ?>&nbsp;</td>
							<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
							<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
							<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
								<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
				<p>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>	</p>

				<div>
				<?php
					echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
					echo $this->Paginator->numbers(array('separator' => ''));
					echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
				?>
				</div>	
			</div>
		</div>
	</div>
</div>