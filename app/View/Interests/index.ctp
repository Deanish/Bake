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
				<h3 class="panel-title text-center">Applied Job Details</h3>
			</div>
			<br />
			<?php foreach ($interests as $interest): ?>
				<?php if(($interest['Interest']['user_id']) == AuthComponent::user('id') && (AuthComponent::user('role') == 1) || (AuthComponent::user('role') == 3)): ?>
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
						<tr>
							<td class="text-center"><?php echo h($interest['Post']['title']); ?></td>
							<td class="text-center"><?php echo h($interest['Post']['skills']); ?></td>
							<td class="text-center"><?php echo h($interest['Post']['qualification']); ?></td>
							<td class="text-center"><?php echo h($interest['Post']['location']); ?></td>
							<td class="text-center"><?php echo h($interest['Post']['companyName']); ?></td>
							<td class="text-center"><?php echo h($interest['Post']['person']); ?></td>
							<td class="text-center"><?php echo h($interest['Post']['contact']); ?></td>
							<td class="text-center"><?php echo h($interest['Post']['modified']); ?></td>
							<td class="text-center"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $interest['Interest']['id']), array(), __('Are you sure you want to delete %s?', $interest['Post']['title'])); ?></td>
						</tr>
					</table><hr />
				<?php endif; ?>
			<?php endforeach; ?>

					<table width="100%" border="0">
						<tr>
							<th class="text-center" style="background-color: #ed1c24; color: #FFF;">Applied for Job Title</th>
							<th class="text-center" style="background-color: #ed1c24; color: #FFF;">First Name</th>
							<th class="text-center" style="background-color: #ed1c24; color: #FFF;">Last Name</th>
							<th class="text-center" style="background-color: #ed1c24; color: #FFF;">Email ID</th>
							<th class="text-center" style="background-color: #ed1c24; color: #FFF;">Action</th>
						</tr>
			<?php foreach ($interests as $interest): ?>
				<?php if((($interest['Interest']['post_id']) == ($interest['Post']['id'])) && (($interest['Post']['user_id']) == AuthComponent::user('id')) && (AuthComponent::user('role') == 2) || (AuthComponent::user('role') == 3)): ?>
					
						<tr>
							<td class="text-center"><?php echo h($interest['Post']['title']); ?></td>
							<td class="text-center"><?php echo h($interest['User']['firstname']); ?></td>
							<td class="text-center"><?php echo h($interest['User']['lastname']); ?></td>
							<td class="text-center"><?php echo h($interest['User']['username']); ?></td>
							<td class="text-center"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $interest['Interest']['id']), array(), __('Are you sure you want to delete %s?', $interest['Post']['title'])); ?></td>
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