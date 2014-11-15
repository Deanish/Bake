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

	        <div class="col-md-2" style="padding-top: 10px;">
	          <div class="panel panel-default">
	            <div class="panel-heading text-center">
	            <h3 class="panel-title text-center">Job Title</h3>
	            </div>
	            <?php foreach ($interests as $interest): ?>
						<?php if(($interest['Interest']['user_id']) == AuthComponent::user('id')): ?>
				            <div class="panel-body">
				            	<?php echo h($interest['Post']['title']); ?>
				            </div>
		    			<?php endif; ?>
				<?php endforeach; ?>
	          </div>
	        </div>

	        <div class="col-md-2" style="padding-top: 10px;">
	          <div class="panel panel-default">
	            <div class="panel-heading text-center">
	            <h3 class="panel-title text-center">Qualification</h3>
	            </div>
	            <?php foreach ($interests as $interest): ?>
						<?php if(($interest['Interest']['user_id']) == AuthComponent::user('id')): ?>
				            <div class="panel-body">
				            	<?php echo h($interest['Post']['qualification']); ?>
				            </div>
		    			<?php endif; ?>
				<?php endforeach; ?>
	          </div>
	        </div>

	        <div class="col-md-2" style="padding-top: 10px;">
	          <div class="panel panel-default">
	            <div class="panel-heading text-center">
	            <h3 class="panel-title text-center">Location</h3>
	            </div>
	            <?php foreach ($interests as $interest): ?>
						<?php if(($interest['Interest']['user_id']) == AuthComponent::user('id')): ?>
				            <div class="panel-body">
				            	<?php echo h($interest['Post']['location']); ?>
				            </div>
		    			<?php endif; ?>
				<?php endforeach; ?>
	          </div>
	        </div>

	        <div class="col-md-2" style="padding-top: 10px;">
	          <div class="panel panel-default">
	            <div class="panel-heading text-center">
	            <h3 class="panel-title text-center">Company Name</h3>
	            </div>
	            <?php foreach ($interests as $interest): ?>
						<?php if(($interest['Interest']['user_id']) == AuthComponent::user('id')): ?>
				            <div class="panel-body">
				            	<?php echo h($interest['Post']['companyName']); ?>
				            </div>
		    			<?php endif; ?>
				<?php endforeach; ?>
	          </div>
	        </div>

	        <div class="col-md-2" style="padding-top: 10px;">
	          <div class="panel panel-default">
	            <div class="panel-heading text-center">
	            <h3 class="panel-title text-center">Contact Person</h3>
	            </div>
	            <?php foreach ($interests as $interest): ?>
						<?php if(($interest['Interest']['user_id']) == AuthComponent::user('id')): ?>
				            <div class="panel-body">
				            	<?php echo h($interest['Post']['person']); ?>
				            </div>
		    			<?php endif; ?>
				<?php endforeach; ?>
	          </div>
	        </div>

	        <div class="col-md-2" style="padding-top: 10px;">
	          <div class="panel panel-default">
	            <div class="panel-heading text-center">
	            <h3 class="panel-title text-center">Contact Number</h3>
	            </div>
	            <?php foreach ($interests as $interest): ?>
						<?php if(($interest['Interest']['user_id']) == AuthComponent::user('id')): ?>
				            <div class="panel-body">
				            	<?php echo h($interest['Post']['contact']); ?>
				            </div>
		    			<?php endif; ?>
				<?php endforeach; ?>
	          </div>
	        </div>

	    </div>

	    <p>
		<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}')
			));
		?>	
	</p>
	<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('previous || '), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
	</div>

	</div>
</div>


	        <!-- 

	        <div class="col-md-2" style="padding-top: 10px;">
	          <div class="panel panel-default">
	            <div class="panel-heading text-center">
	            <h3 class="panel-title text-center">Qualification</h3>
	            </div>
	            <?php foreach ($posts as $post): ?>
					<?php if(($post['Post']['user_id']) == AuthComponent::user('id')): ?>
			            <div class="panel-body">
	            			<?php echo h($post['Post']['qualification']); ?>
			            </div>
	    			<?php endif; ?>
				<?php endforeach; ?>
	          </div>
	        </div>

	        <div class="col-md-2" style="padding-top: 10px;">
	          <div class="panel panel-default">
	            <div class="panel-heading text-center">
	            <h3 class="panel-title text-center">Location</h3>
	            </div>
	            <?php foreach ($posts as $post): ?>
					<?php if(($post['Post']['user_id']) == AuthComponent::user('id')): ?>
			            <div class="panel-body">
	            			<?php echo h($post['Post']['location']); ?>
			            </div>
	    			<?php endif; ?>
				<?php endforeach; ?>
	          </div>
	        </div>

	        <div class="col-md-2" style="padding-top: 10px;">
	          <div class="panel panel-default">
	            <div class="panel-heading text-center">
	            <h3 class="panel-title text-center">Company Name</h3>
	            </div>
	            <?php foreach ($posts as $post): ?>
					<?php if(($post['Post']['user_id']) == AuthComponent::user('id')): ?>
			            <div class="panel-body">
	            			<?php echo h($post['Post']['companyName']); ?>
			            </div>
	    			<?php endif; ?>
				<?php endforeach; ?>
	          </div>
	        </div>

	        <div class="col-md-2" style="padding-top: 10px;">
	          <div class="panel panel-default">
	            <div class="panel-heading text-center">
	            <h3 class="panel-title text-center">Contact Person</h3>
	            </div>
	            <?php foreach ($posts as $post): ?>
					<?php if(($post['Post']['user_id']) == AuthComponent::user('id')): ?>
			            <div class="panel-body">
	            			<?php echo h($post['Post']['person']); ?>
			            </div>
	    			<?php endif; ?>
				<?php endforeach; ?>
	          </div>
	        </div>

	        <div class="col-md-2" style="padding-top: 10px;">
	          <div class="panel panel-default">
	            <div class="panel-heading text-center">
	            <h3 class="panel-title text-center">Action</h3>
	            </div>
	            <?php foreach ($posts as $post): ?>
					<?php if(($post['Post']['user_id']) == AuthComponent::user('id')): ?>
			            <div class="panel-body">
	            			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); echo " | "; ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete  %s job?', $post['Post']['title'])); ?>
			            </div>
	    			<?php endif; ?>
				<?php endforeach; ?>
	          </div>
	        </div>

    </div>
    <p>
		<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}')
			));
		?>	
	</p>
	<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
	</div>
  </div>
</div>   -->