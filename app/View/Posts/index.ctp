<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>


<div class="row">
	<div class="col-md-12" style="padding-top: 10px;">
	    <div class="panel panel-default">
	        <div class="panel-heading text-center">
	        	<h3 class="panel-title text-center">View Jobs Posted</h3>
	        </div>
			<br />
			<table width="100%" border="0">
				<tr>
					<th class="text-center" style="background-color: #ed1c24; color: #FFF;">Job Title</th>
					<th class="text-center" style="background-color: #ed1c24; color: #FFF;">Skills</th>
					<th class="text-center" style="background-color: #ed1c24; color: #FFF;">Qualification</th>
					<th class="text-center" style="background-color: #ed1c24; color: #FFF;">Location</th>
					<th class="text-center" style="background-color: #ed1c24; color: #FFF;">Company Name</th>
					<th class="text-center" style="background-color: #ed1c24; color: #FFF;">Contact Person</th>
					<th class="text-center" style="background-color: #ed1c24; color: #FFF;">Contact Number</th>
					<th class="text-center" style="background-color: #ed1c24; color: #FFF;">Job Posted on</th>
					<th class="text-center" style="background-color: #ed1c24; color: #FFF;">Action</th>
				</tr>
				<?php foreach ($posts as $post): ?>
					<?php if (AuthComponent::user('role') == 3 && $post['Post']['visible'] == 1): ?>
					
					<tr>
						<td class="text-center"><?php echo h($post['Post']['title']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['skills']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['qualification']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['location']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['companyName']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['person']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['contact']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['modified']); ?></td>
						<td class="text-center">
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); echo " | "; ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete  %s job?', $post['Post']['title'])); ?>
						</td>
					</tr>

					<?php endif; ?>

					<?php if(($post['Post']['user_id']) == AuthComponent::user('id') && AuthComponent::user('role') == 2): ?>
					
					<tr>
						<td class="text-center"><?php echo h($post['Post']['title']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['skills']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['qualification']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['location']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['companyName']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['person']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['contact']); ?></td>
						<td class="text-center"><?php echo h($post['Post']['modified']); ?></td>
						<td class="text-center">
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); echo " | "; ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete  %s job?', $post['Post']['title'])); ?>
						</td>
					</tr>

					<?php endif; ?>
				<?php endforeach; ?>
			</table><hr />

			<p>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}')
					));
				?>	
			</p>
				<?php
					echo $this->Paginator->prev('< ' . __('previous || '), array(), null, array('class' => 'prev disabled'));
					echo $this->Paginator->numbers(array('separator' => ''));
					echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
				?>
		</div>
	</div>
<div>