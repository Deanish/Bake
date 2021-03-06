<?php
App::import('Model', 'Interest');
?>
<div class="row">
	<div class="col-md-12" style="padding-top: 10px;">
	    <div class="col-md-8" style="padding-top: 10px;">
	    	<div class="panel panel-default">
		        <div class="panel-heading">
		        <h3 class="panel-title text-center">Job Details</h3>
		        </div>
		        <div style="padding: 10px;">
		        	<table>
		        		<?php echo $this->Form->create('Interest'); ?>
		        		<?php echo $this->Form->hidden('post_id', array('value' => $user['Candidate']['id'])); ?>
		        		<tr><td  width="160px" ></td></tr>
		        		<tr>
		        			<td class="pull-right"><strong>Job ID :&nbsp;</strong></td>
		        			<td>
		        				<?php 
		        					echo h($user['Candidate']['id']); 
		        				?>
		        			</td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Job Title :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['title']); ?></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Skills Required :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['skills']); ?></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Qualification :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['qualification']); ?></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Number of Vacancies :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['vacancies']); ?></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Job Description :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['description']); ?></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Experience required :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['experience']); ?></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Salary Offered :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['salary']); ?></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Job Location :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['location']); ?></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Industry Type :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['industryType']); ?></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Company Name :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['companyName']); ?></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Company Profile :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['profile']); ?></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Company website :&nbsp;</strong></td>
		        			<td><a href="<?php echo h($user['Candidate']['url']); ?>" target="_blank"><?php echo h($user['Candidate']['url']); ?></a></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Contact Person :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['person']); ?></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Contact Details :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['contact']); ?></td>
		        		</tr>
		        		<tr>
		        			<td class="pull-right"><strong>Job Posted on :&nbsp;</strong></td>
		        			<td><?php echo h($user['Candidate']['modified']); ?></td>
		        		</tr>
		        		<tr>
		        			<td><br /></td>
		        			<td><br /></td>
		        		</tr>
		        		<tr>
		        			<td></td>
		        			<td>
		        				<?php if (AuthComponent::user('role') == 1): ?>
									<?php echo $this->Form->Submit('Apply for this Job', array('class' => 'btn btn-success')); ?>
			        				<?php echo $this->Form->end(); ?>
			        			<?php endif; ?>
		        				<?php if (AuthComponent::user('role') == 3): ?>
			        				<?php echo $this->Form->create('Featuredjob', array('controller' => 'featured', 'action' => 'add')); ?>
			        				<?php echo $this->Form->hidden('post_id', array('value' => $user['Candidate']['id'])); ?>
			        				<?php echo $this->Form->hidden('title', array('value' => $user['Candidate']['title'])); ?>
			        				<?php echo $this->Form->hidden('qualification', array('value' => $user['Candidate']['qualification'])); ?>
			        				<?php echo $this->Form->hidden('company', array('value' => $user['Candidate']['companyName'])); ?>
									<?php echo $this->Form->Submit('Promote as Featured Job', array('class' => 'btn btn-success')); ?>	
			        				<?php echo $this->Form->end(); ?>
			        			<?php endif; ?>
		        			</td>		        			
		        		</tr>        		
		        	</table>
		        </div>
		    </div>
	    </div>

		<?php 
	      $path = $this->webroot."files/post/photo/"; 
	      $dir = $user['Candidate']['photo_dir'];
	      $img = $user['Candidate']['photo'];
	    ?>
	    <div class="col-md-4" style="padding-top: 10px;">
	      <div class="panel panel-default">
	        <div class="panel-heading text-center">
	        <h3 class="panel-title text-center">Company Logo</h3>
	        </div>
	        <div class="panel-body">
	          <img class="pull-right" src="<?php echo $path.$dir.'/'.$img; ?>" width="318px" height="200px">
	        </div>
	      </div>
	    </div>

	</div>
</div>
