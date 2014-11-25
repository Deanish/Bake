<?php 
	if(AuthComponent::user('role') == 1) { 
		if(AuthComponent::user('id') == $user['User']['id']) {  
?>
<div class="row">
	<div class="col-md-12" style="padding-top: 10px;">
	    <div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">User Details</h3>
			</div>

	        <div class="col-md-10 col-md-offset-1" style="padding-top: 10px;">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title text-center">Login Details</h3>
					</div>
					<div style="padding: 10px;">
						<table width="100%">
							<tr>
								<th class="text-center">User ID</th>
								<th class="text-center">Email ID</th>
								<th class="text-center">First Name</th>
								<th class="text-center">Last Name</th>
								<th class="text-center">Image</th>
							</tr>
							<tr>
								<td class="text-center"><?php echo h($user['User']['id']); ?></td>
								<td class="text-center"><?php echo h($user['User']['username']); ?></td>
								<td class="text-center"><?php echo h($user['User']['firstname']); ?></td>
								<td class="text-center"><?php echo h($user['User']['lastname']); ?></td>
								<td class="text-center"><?php echo h($user['User']['photo']); ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>

	        <div class="col-md-10 col-md-offset-1" style="padding-top: 10px;">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title text-center">Personal Details</h3>
					</div>
					<div style="padding: 10px;">
						<?php if (!empty($user['Personal'])): ?>
							<table width="100%">
								<tr>
									<th class="text-center">Personal ID</th>
									<th class="text-center">Mobile</th>
									<th class="text-center">Nationality</th>
									<th class="text-center">Location</th>
									<th class="text-center">Gender</th>
									<th class="text-center">Resume</th>
								</tr>
								<?php foreach ($user['Personal'] as $personal): ?>
									<tr>
										<td class="text-center"><?php echo $personal['id']; ?></td>
										<td class="text-center"><?php echo $personal['mobile']; ?></td>
										<td class="text-center"><?php echo $personal['nationality']; ?></td>
										<td class="text-center"><?php echo $personal['location']; ?></td>
										<td class="text-center"><?php echo $personal['gender']; ?></td>
										<?php 
								          $path = $this->webroot."files/personal/resume/"; 
								          $dir = $personal['resume_dir'];
								          $img = $personal['resume'];
								        ?>										
										<td class="text-center"><a href="<?php echo $path.$dir.'/'.$img; ?>" download><?php echo $personal['resume']; ?></a></td>
									</tr>
								<?php endforeach; ?>
							</table>
						<?php endif; ?>
					</div>
				</div>
			</div>

	        <div class="col-md-10 col-md-offset-1" style="padding-top: 10px;">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title text-center">Educational Details</h3>
					</div>
					<div style="padding: 10px;">
						<?php if (!empty($user['Education'])): ?>
							<table width="100%">
								<tr>
									<th class="text-center">Educational ID</th>
									<th class="text-center">Qualification</th>
									<th class="text-center">Specialization</th>
									<th class="text-center">Institute</th>
									<th class="text-center">University</th>
									<th class="text-center">Marks</th>
									<th class="text-center">Year of Passing</th>
									<th class="text-center">Course Type</th>
								</tr>
								<?php foreach ($user['Education'] as $education): ?>
									<tr>
										<td class="text-center"><?php echo $education['id']; ?></td>
										<td class="text-center"><?php echo $education['qualification']; ?></td>
										<td class="text-center"><?php echo $education['specialization']; ?></td>
										<td class="text-center"><?php echo $education['institute']; ?></td>
										<td class="text-center"><?php echo $education['university']; ?></td>
										<td class="text-center"><?php echo $education['marks']; ?></td>
										<td class="text-center"><?php echo $education['yop']; ?></td>
										<td class="text-center"><?php echo $education['courseType']; ?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						<?php endif; ?>
					</div>
				</div>
			</div>

	        <div class="col-md-10 col-md-offset-1" style="padding-top: 10px;">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title text-center">Professional Details</h3>
					</div>
					<div style="padding: 10px;">
						<?php if (!empty($user['Professional'])): ?>
							<table width="100%">
								<tr>
									<th class="text-center">Professional ID</th>
									<th class="text-center">Status</th>
									<th class="text-center" colspan="2">Experience</th>
									<th class="text-center">CTC</th>
									<th class="text-center">Company Name</th>
									<th class="text-center">Designation</th>
									<th class="text-center">Skills</th>
									<th class="text-center">Notice Period</th>
									<th class="text-center">Previous Companies</th>
								</tr>
								<tr>
									<td></td><td></td>
									<th class="text-center">Years</th>
									<th class="text-center">Months</th>
									<td></td><td></td><td></td><td></td><td></td><td></td>
								</tr>	
								<?php foreach ($user['Professional'] as $professional): ?>
									<tr>
										<td class="text-center"><?php echo $professional['id']; ?></td>
										<td class="text-center"><?php echo $professional['status']; ?></td>
										<td class="text-center"><?php echo $professional['years']; ?></td>
										<td class="text-center"><?php echo $professional['months']; ?></td>
										<td class="text-center"><?php echo $professional['ctc']; ?></td>
										<td class="text-center"><?php echo $professional['company']; ?></td>
										<td class="text-center"><?php echo $professional['designation']; ?></td>
										<td class="text-center"><?php echo $professional['skills']; ?></td>
										<td class="text-center"><?php echo $professional['notice']; ?></td>
										<td class="text-center"><?php echo $professional['prevCompanies']; ?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						<?php endif; ?>
					</div>
				</div>
			</div>

	        <div class="col-md-10 col-md-offset-1" style="padding-top: 10px;">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title text-center">Desire Details</h3>
					</div>
					<div style="padding: 10px;">
						<?php if (!empty($user['Desire'])): ?>
							<table width="100%">
								<tr>
									<th class="text-center">Desire ID</th>
									<th class="text-center">Location</th>
									<th class="text-center">Skills</th>
									<th class="text-center">Qualification</th>
									<th class="text-center">Experience</th>
									<th class="text-center">Industry Type</th>
									<th class="text-center">Job Type</th>
									<th class="text-center">Shift Type</th>
								</tr>
								<?php foreach ($user['Desire'] as $desire): ?>
									<tr>
										<td class="text-center"><?php echo $desire['id']; ?></td>
										<td class="text-center"><?php echo $desire['location']; ?></td>
										<td class="text-center"><?php echo $desire['skills']; ?></td>
										<td class="text-center"><?php echo $desire['qualification']; ?></td>
										<td class="text-center"><?php echo $desire['experience']; ?></td>
										<td class="text-center"><?php echo $desire['industryType']; ?></td>
										<td class="text-center"><?php echo $desire['jobType']; ?></td>
										<td class="text-center"><?php echo $desire['shiftType']; ?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						<?php endif; ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php
		}
	}
?>









<?php 
	if(AuthComponent::user('role') == 2) { 
?>
<div class="row">
	<div class="col-md-12" style="padding-top: 10px;">
	    <div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">User Details</h3>
			</div>

	        <div class="col-md-10 col-md-offset-1" style="padding-top: 10px;">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title text-center">Login Details</h3>
					</div>
					<div style="padding: 10px;">
						<table width="100%">
							<tr>
								<th class="text-center">Email ID</th>
								<th class="text-center">First Name</th>
								<th class="text-center">Last Name</th>
							</tr>
							<tr>
								<td class="text-center"><?php echo h($user['User']['username']); ?></td>
								<td class="text-center"><?php echo h($user['User']['firstname']); ?></td>
								<td class="text-center"><?php echo h($user['User']['lastname']); ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>

	        <div class="col-md-10 col-md-offset-1" style="padding-top: 10px;">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title text-center">Personal Details</h3>
					</div>
					<div style="padding: 10px;">
						<?php if (!empty($user['Personal'])): ?>
							<table width="100%">
								<tr>
									<th class="text-center">Mobile</th>
									<th class="text-center">Nationality</th>
									<th class="text-center">Location</th>
									<th class="text-center">Gender</th>
									<th class="text-center">Resume</th>
								</tr>
								<?php foreach ($user['Personal'] as $personal): ?>
									<tr>
										<td class="text-center"><?php echo $personal['mobile']; ?></td>
										<td class="text-center"><?php echo $personal['nationality']; ?></td>
										<td class="text-center"><?php echo $personal['location']; ?></td>
										<td class="text-center"><?php echo $personal['gender']; ?></td>
										<?php 
								          $path = $this->webroot."files/personal/resume/"; 
								          $dir = $personal['resume_dir'];
								          $img = $personal['resume'];
								        ?>										
										<td class="text-center"><a href="<?php echo $path.$dir.'/'.$img; ?>" download><?php echo $personal['resume']; ?></a></td>
									</tr>
								<?php endforeach; ?>
							</table>
						<?php endif; ?>
					</div>
				</div>
			</div>

	        <div class="col-md-10 col-md-offset-1" style="padding-top: 10px;">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title text-center">Educational Details</h3>
					</div>
					<div style="padding: 10px;">
						<?php if (!empty($user['Education'])): ?>
							<table width="100%">
								<tr>
									<th class="text-center">Qualification</th>
									<th class="text-center">Specialization</th>
									<th class="text-center">Institute</th>
									<th class="text-center">University</th>
									<th class="text-center">Marks</th>
									<th class="text-center">Year of Passing</th>
									<th class="text-center">Course Type</th>
								</tr>
								<?php foreach ($user['Education'] as $education): ?>
									<tr>
										<td class="text-center"><?php echo $education['qualification']; ?></td>
										<td class="text-center"><?php echo $education['specialization']; ?></td>
										<td class="text-center"><?php echo $education['institute']; ?></td>
										<td class="text-center"><?php echo $education['university']; ?></td>
										<td class="text-center"><?php echo $education['marks']; ?></td>
										<td class="text-center"><?php echo $education['yop']; ?></td>
										<td class="text-center"><?php echo $education['courseType']; ?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						<?php endif; ?>
					</div>
				</div>
			</div>

	        <div class="col-md-10 col-md-offset-1" style="padding-top: 10px;">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title text-center">Professional Details</h3>
					</div>
					<div style="padding: 10px;">
						<?php if (!empty($user['Professional'])): ?>
							<table width="100%">
								<tr>
									<th class="text-center">Status</th>
									<th class="text-center" colspan="2">Experience</th>
									<th class="text-center">CTC</th>
									<th class="text-center">Company Nmae</th>
									<th class="text-center">Designation</th>
									<th class="text-center">Skills</th>
									<th class="text-center">Notice Period</th>
									<th class="text-center">Previous Companies</th>
								</tr>
								<tr>
									<td></td>
									<th class="text-center">Years</th>
									<th class="text-center">Months</th>
									<td></td><td></td><td></td><td></td><td></td><td></td>
								</tr>	
								<?php foreach ($user['Professional'] as $professional): ?>
									<tr>
										<td class="text-center"><?php echo $professional['status']; ?></td>
										<td class="text-center"><?php echo $professional['years']; ?></td>
										<td class="text-center"><?php echo $professional['months']; ?></td>
										<td class="text-center"><?php echo $professional['ctc']; ?></td>
										<td class="text-center"><?php echo $professional['company']; ?></td>
										<td class="text-center"><?php echo $professional['designation']; ?></td>
										<td class="text-center"><?php echo $professional['skills']; ?></td>
										<td class="text-center"><?php echo $professional['notice']; ?></td>
										<td class="text-center"><?php echo $professional['prevCompanies']; ?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						<?php endif; ?>
					</div>
				</div>
			</div>

	        <div class="col-md-10 col-md-offset-1" style="padding-top: 10px;">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title text-center">Desire Details</h3>
					</div>
					<div style="padding: 10px;">
						<?php if (!empty($user['Desire'])): ?>
							<table width="100%">
								<tr>
									<th class="text-center">Location</th>
									<th class="text-center">Skills</th>
									<th class="text-center">Qualification</th>
									<th class="text-center">Experience</th>
									<th class="text-center">Industry Type</th>
									<th class="text-center">Job Type</th>
									<th class="text-center">Shift Type</th>
								</tr>
								<?php foreach ($user['Desire'] as $desire): ?>
									<tr>
										<td class="text-center"><?php echo $desire['location']; ?></td>
										<td class="text-center"><?php echo $desire['skills']; ?></td>
										<td class="text-center"><?php echo $desire['qualification']; ?></td>
										<td class="text-center"><?php echo $desire['experience']; ?></td>
										<td class="text-center"><?php echo $desire['industryType']; ?></td>
										<td class="text-center"><?php echo $desire['jobType']; ?></td>
										<td class="text-center"><?php echo $desire['shiftType']; ?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						<?php endif; ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php 
	}
?>









<?php if(AuthComponent::user('role') == 3): ?>

	<div class="col-md-12" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">User Details (Role: 1 = Jobseeker, 2 = Recruiter, 3 = admin)</h3>
			</div>
			<div style="padding: 10px;">
				<table width="100%">
					<tr>
						<th class="text-center">User ID</th>
						<th class="text-center">Email ID</th>
						<th class="text-center">First Name</th>
						<th class="text-center">Last Name</th>
						<th class="text-center">Role</th>
						<th class="text-center">Image</th>
						<th class="text-center">Created</th>
						<th class="text-center">Modified</th>
					</tr>
					<tr>
						<td class="text-center"><?php echo h($user['User']['id']); ?></td>
						<td class="text-center"><?php echo h($user['User']['username']); ?></td>
						<td class="text-center"><?php echo h($user['User']['firstname']); ?></td>
						<td class="text-center"><?php echo h($user['User']['lastname']); ?></td>
						<td class="text-center"><?php echo h($user['User']['role']); ?></td>
						<td class="text-center"><?php echo h($user['User']['photo']); ?></td>
						<td class="text-center"><?php echo h($user['User']['created']); ?></td>
						<td class="text-center"><?php echo h($user['User']['modified']); ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<?php if($user['User']['role'] == 1): ?>
		<div class="col-md-12" style="padding-top: 10px;">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title text-center">Job Desires</h3>
				</div>
				<div style="padding: 10px;">
					<table width="100%">
						<tr>
							<th class="text-center">Location</th>
							<th class="text-center">Skills</th>
							<th class="text-center">Qualification</th>
							<th class="text-center">Experience</th>
							<th class="text-center">Industry Type</th>
							<th class="text-center">Job Type</th>
							<th class="text-center">Shift Type</th>
							<th class="text-center">Created</th>
							<th class="text-center">Modified</th>
						</tr>
						<?php foreach ($user['Desire'] as $desire): ?>
							<tr>
								<td class="text-center"><?php echo $desire['location']; ?></td>
								<td class="text-center"><?php echo $desire['skills']; ?></td>
								<td class="text-center"><?php echo $desire['qualification']; ?></td>
								<td class="text-center"><?php echo $desire['experience']; ?></td>
								<td class="text-center"><?php echo $desire['industryType']; ?></td>
								<td class="text-center"><?php echo $desire['jobType']; ?></td>
								<td class="text-center"><?php echo $desire['shiftType']; ?></td>
								<td class="text-center"><?php echo $desire['created']; ?></td>
								<td class="text-center"><?php echo $desire['modified']; ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if($user['User']['role'] == 1): ?>
		<div class="col-md-12" style="padding-top: 10px;">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title text-center">Eduction Details</h3>
				</div>
				<div style="padding: 10px;">
					<table width="100%">
						<tr>
							<th class="text-center">Qualification</th>
							<th class="text-center">Specialization</th>
							<th class="text-center">Institute</th>
							<th class="text-center">University</th>
							<th class="text-center">Marks</th>
							<th class="text-center">Year of passing</th>
							<th class="text-center">Course Type</th>
							<th class="text-center">Created</th>
							<th class="text-center">Modified</th>
						</tr>
						<?php foreach ($user['Education'] as $education): ?>
							<tr>
								<td class="text-center"><?php echo $education['qualification']; ?></td>
								<td class="text-center"><?php echo $education['specialization']; ?></td>
								<td class="text-center"><?php echo $education['institute']; ?></td>
								<td class="text-center"><?php echo $education['university']; ?></td>
								<td class="text-center"><?php echo $education['marks']; ?></td>
								<td class="text-center"><?php echo $education['yop']; ?></td>
								<td class="text-center"><?php echo $education['courseType']; ?></td>
								<td class="text-center"><?php echo $education['created']; ?></td>
								<td class="text-center"><?php echo $education['modified']; ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if($user['User']['role'] == 3): ?>
		<div class="col-md-12" style="padding-top: 10px;">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title text-center">Featured job Details</h3>
				</div>
				<div style="padding: 10px;">
					<table width="100%">
						<tr>
							<th class="text-center">Job ID</th>
							<th class="text-center">Post ID</th>
							<th class="text-center">Title</th>
							<th class="text-center">Qualification</th>
							<th class="text-center">Company</th>
							<th class="text-center">Created</th>
							<th class="text-center">Modified</th>
							<th class="text-center">Delete</th>
						</tr>
						<?php foreach ($user['Featuredjob'] as $featuredjob): ?>
							<tr>
								<td class="text-center"><?php echo $featuredjob['id']; ?></td>
								<td class="text-center"><?php echo $featuredjob['post_id']; ?></td>
								<td class="text-center"><?php echo $featuredjob['title']; ?></td>
								<td class="text-center"><?php echo $featuredjob['qualification']; ?></td>
								<td class="text-center"><?php echo $featuredjob['company']; ?></td>
								<td class="text-center"><?php echo $featuredjob['created']; ?></td>
								<td class="text-center"><?php echo $featuredjob['modified']; ?></td>
								<td class="text-center"><?php echo $this->Form->postLink(__('Delete'), array('controller' => 'featured','action' => 'delete', $featuredjob['id']), array(), __('Are you sure you want to delete # %s?', $featuredjob['id'])); ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if($user['User']['role'] == 1): ?>
		<div class="col-md-12" style="padding-top: 10px;">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title text-center">Personal Details</h3>
				</div>
				<div style="padding: 10px;">
					<table width="100%">
						<tr>
							<th class="text-center">Mobile</th>
							<th class="text-center">Nationality</th>
							<th class="text-center">Location</th>
							<th class="text-center">Gender</th>
							<th class="text-center">Date of Birth</th>
							<th class="text-center">Reume</th>
							<th class="text-center">Resume Dir</th>
							<th class="text-center">Created</th>
							<th class="text-center">Modified</th>
						</tr>
						<?php foreach ($user['Personal'] as $personal): ?>
							<tr>
								<td class="text-center"><?php echo $personal['mobile']; ?></td>
								<td class="text-center"><?php echo $personal['nationality']; ?></td>
								<td class="text-center"><?php echo $personal['location']; ?></td>
								<td class="text-center"><?php echo $personal['gender']; ?></td>
								<td class="text-center"><?php echo $personal['dob']; ?></td>
								<?php 
						          $path = $this->webroot."files/personal/resume/"; 
						          $dir = $personal['resume_dir'];
						          $img = $personal['resume'];
						        ?>
								<td class="text-center"><a href="<?php echo $path.$dir.'/'.$img; ?>" download><?php echo $personal['resume']; ?></a></td>
								<td class="text-center"><?php echo $personal['resume_dir']; ?></td>
								<td class="text-center"><?php echo $personal['created']; ?></td>
								<td class="text-center"><?php echo $personal['modified']; ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if($user['User']['role'] == 2): ?>
		<div class="col-md-12" style="padding-top: 10px;">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title text-center">Job Post Details (Visible: 1 = Hidden, 2 = Visible)</h3>
				</div>
				<div style="padding: 10px;">
					<table width="100%">
						<tr>
							<th class="text-center">Title</th>
							<th class="text-center">Skills</th>
							<th class="text-center">Qualification</th>
							<th class="text-center">Vacancies</th>
							<th class="text-center">Description</th>
							<th class="text-center">Experience</th>
							<th class="text-center">Salary</th>
							<th class="text-center">Location</th>
							<th class="text-center">Industry Type</th>
						</tr>
						<?php foreach ($user['Post'] as $post): ?>
							<tr>
								<td class="text-center"><?php echo $post['title']; ?></td>
								<td class="text-center"><?php echo $post['skills']; ?></td>
								<td class="text-center"><?php echo $post['qualification']; ?></td>
								<td class="text-center"><?php echo $post['vacancies']; ?></td>
								<td class="text-center"><?php echo $post['description']; ?></td>
								<td class="text-center"><?php echo $post['experience']; ?></td>
								<td class="text-center"><?php echo $post['salary']; ?></td>
								<td class="text-center"><?php echo $post['location']; ?></td>
								<td class="text-center"><?php echo $post['industryType']; ?></td>
							</tr>
						<?php endforeach; ?>
						<tr>
							<th class="text-center">Company Name</th>
							<th class="text-center">Company Profile</th>
							<th class="text-center">Company Logo</th>
							<th class="text-center">Company Logo Dir</th>
							<th class="text-center">Company URL</th>
							<th class="text-center">Contact Person</th>
							<th class="text-center">Contact Number</th>
							<th class="text-center">Visible</th>
							<th class="text-center">Created</th>
							<th class="text-center">Modified</th>
						</tr>
						<?php foreach ($user['Post'] as $post): ?>
							<tr>
								<td class="text-center"><?php echo $post['companyName']; ?></td>
								<td class="text-center"><?php echo $post['profile']; ?></td>
								<td class="text-center"><?php echo $post['photo']; ?></td>
								<td class="text-center"><?php echo $post['photo_dir']; ?></td>
								<td class="text-center"><?php echo $post['url']; ?></td>
								<td class="text-center"><?php echo $post['person']; ?></td>
								<td class="text-center"><?php echo $post['contact']; ?></td>
								<td class="text-center"><?php echo $post['visible']; ?></td>
								<td class="text-center"><?php echo $post['created']; ?></td>
								<td class="text-center"><?php echo $post['modified']; ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if($user['User']['role'] == 1): ?>
		<div class="col-md-12" style="padding-top: 10px;">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title text-center">Professional Details</h3>
				</div>
				<div style="padding: 10px;">
					<table width="100%">
						<tr>
							<th class="text-center">Status</th>
							<th class="text-center">Years</th>
							<th class="text-center">Months</th>
							<th class="text-center">CTC</th>
							<th class="text-center">Company</th>
							<th class="text-center">Designation</th>
							<th class="text-center">Skills</th>
							<th class="text-center">Notice Period</th>
							<th class="text-center">Previous Companies</th>
							<th class="text-center">Created</th>
							<th class="text-center">Modified</th>
						</tr>
						<?php foreach ($user['Professional'] as $professional): ?>
							<tr>
								<td class="text-center"><?php echo $professional['status']; ?></td>
								<td class="text-center"><?php echo $professional['years']; ?></td>
								<td class="text-center"><?php echo $professional['months']; ?></td>
								<td class="text-center"><?php echo $professional['ctc']; ?></td>
								<td class="text-center"><?php echo $professional['company']; ?></td>
								<td class="text-center"><?php echo $professional['designation']; ?></td>
								<td class="text-center"><?php echo $professional['skills']; ?></td>
								<td class="text-center"><?php echo $professional['notice']; ?></td>
								<td class="text-center"><?php echo $professional['prevCompanies']; ?></td>
								<td class="text-center"><?php echo $professional['created']; ?></td>
								<td class="text-center"><?php echo $professional['modified']; ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
	<?php endif; ?>

<?php endif; ?>

<!-- <div class="related">
	<h3><?php echo __('Related Featuredcompanies'); ?></h3>
	<?php if (!empty($user['Featuredcompany'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Logo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Featuredcompany'] as $featuredcompany): ?>
		<tr>
			<td><?php echo $featuredcompany['id']; ?></td>
			<td><?php echo $featuredcompany['user_id']; ?></td>
			<td><?php echo $featuredcompany['name']; ?></td>
			<td><?php echo $featuredcompany['logo']; ?></td>
			<td><?php echo $featuredcompany['created']; ?></td>
			<td><?php echo $featuredcompany['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'featuredcompanies', 'action' => 'view', $featuredcompany['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'featuredcompanies', 'action' => 'edit', $featuredcompany['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'featuredcompanies', 'action' => 'delete', $featuredcompany['id']), array(), __('Are you sure you want to delete # %s?', $featuredcompany['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Featuredcompany'), array('controller' => 'featuredcompanies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Featuredjobs'); ?></h3>
	<?php if (!empty($user['Featuredjob'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Featuredjob'] as $featuredjob): ?>
		<tr>
			<td><?php echo $featuredjob['id']; ?></td>
			<td><?php echo $featuredjob['post_id']; ?></td>
			<td><?php echo $featuredjob['user_id']; ?></td>
			<td><?php echo $featuredjob['created']; ?></td>
			<td><?php echo $featuredjob['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'featuredjobs', 'action' => 'view', $featuredjob['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'featuredjobs', 'action' => 'edit', $featuredjob['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'featuredjobs', 'action' => 'delete', $featuredjob['id']), array(), __('Are you sure you want to delete # %s?', $featuredjob['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Featuredjob'), array('controller' => 'featuredjobs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div> -->