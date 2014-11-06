<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($user['User']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($user['User']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($user['User']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Companies'); ?></h3>
	<?php if (!empty($user['Company'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Profile'); ?></th>
		<th><?php echo __('Logo'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Person'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Company'] as $company): ?>
		<tr>
			<td><?php echo $company['id']; ?></td>
			<td><?php echo $company['post_id']; ?></td>
			<td><?php echo $company['user_id']; ?></td>
			<td><?php echo $company['name']; ?></td>
			<td><?php echo $company['profile']; ?></td>
			<td><?php echo $company['logo']; ?></td>
			<td><?php echo $company['url']; ?></td>
			<td><?php echo $company['person']; ?></td>
			<td><?php echo $company['contact']; ?></td>
			<td><?php echo $company['created']; ?></td>
			<td><?php echo $company['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'companies', 'action' => 'view', $company['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'companies', 'action' => 'edit', $company['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'companies', 'action' => 'delete', $company['id']), array(), __('Are you sure you want to delete # %s?', $company['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Desires'); ?></h3>
	<?php if (!empty($user['Desire'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Skills'); ?></th>
		<th><?php echo __('IndustryType'); ?></th>
		<th><?php echo __('JobType'); ?></th>
		<th><?php echo __('ShiftType'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Desire'] as $desire): ?>
		<tr>
			<td><?php echo $desire['id']; ?></td>
			<td><?php echo $desire['user_id']; ?></td>
			<td><?php echo $desire['location']; ?></td>
			<td><?php echo $desire['skills']; ?></td>
			<td><?php echo $desire['industryType']; ?></td>
			<td><?php echo $desire['jobType']; ?></td>
			<td><?php echo $desire['shiftType']; ?></td>
			<td><?php echo $desire['created']; ?></td>
			<td><?php echo $desire['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'desires', 'action' => 'view', $desire['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'desires', 'action' => 'edit', $desire['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'desires', 'action' => 'delete', $desire['id']), array(), __('Are you sure you want to delete # %s?', $desire['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Desire'), array('controller' => 'desires', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Educations'); ?></h3>
	<?php if (!empty($user['Education'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Qualification'); ?></th>
		<th><?php echo __('Specialization'); ?></th>
		<th><?php echo __('Institute'); ?></th>
		<th><?php echo __('University'); ?></th>
		<th><?php echo __('Marks'); ?></th>
		<th><?php echo __('Yop'); ?></th>
		<th><?php echo __('CourseType'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Education'] as $education): ?>
		<tr>
			<td><?php echo $education['id']; ?></td>
			<td><?php echo $education['user_id']; ?></td>
			<td><?php echo $education['qualification']; ?></td>
			<td><?php echo $education['specialization']; ?></td>
			<td><?php echo $education['institute']; ?></td>
			<td><?php echo $education['university']; ?></td>
			<td><?php echo $education['marks']; ?></td>
			<td><?php echo $education['yop']; ?></td>
			<td><?php echo $education['courseType']; ?></td>
			<td><?php echo $education['created']; ?></td>
			<td><?php echo $education['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'educations', 'action' => 'view', $education['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'educations', 'action' => 'edit', $education['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'educations', 'action' => 'delete', $education['id']), array(), __('Are you sure you want to delete # %s?', $education['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Education'), array('controller' => 'educations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
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
</div>
<div class="related">
	<h3><?php echo __('Related Personals'); ?></h3>
	<?php if (!empty($user['Personal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('Nationality'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Dob'); ?></th>
		<th><?php echo __('Resume'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Personal'] as $personal): ?>
		<tr>
			<td><?php echo $personal['id']; ?></td>
			<td><?php echo $personal['user_id']; ?></td>
			<td><?php echo $personal['mobile']; ?></td>
			<td><?php echo $personal['nationality']; ?></td>
			<td><?php echo $personal['location']; ?></td>
			<td><?php echo $personal['gender']; ?></td>
			<td><?php echo $personal['dob']; ?></td>
			<td><?php echo $personal['resume']; ?></td>
			<td><?php echo $personal['created']; ?></td>
			<td><?php echo $personal['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personals', 'action' => 'view', $personal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personals', 'action' => 'edit', $personal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personals', 'action' => 'delete', $personal['id']), array(), __('Are you sure you want to delete # %s?', $personal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($user['Post'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Skills'); ?></th>
		<th><?php echo __('Qualification'); ?></th>
		<th><?php echo __('Vacancies'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Experience'); ?></th>
		<th><?php echo __('Salary'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('IndustryType'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['user_id']; ?></td>
			<td><?php echo $post['title']; ?></td>
			<td><?php echo $post['skills']; ?></td>
			<td><?php echo $post['qualification']; ?></td>
			<td><?php echo $post['vacancies']; ?></td>
			<td><?php echo $post['description']; ?></td>
			<td><?php echo $post['experience']; ?></td>
			<td><?php echo $post['salary']; ?></td>
			<td><?php echo $post['location']; ?></td>
			<td><?php echo $post['industryType']; ?></td>
			<td><?php echo $post['visible']; ?></td>
			<td><?php echo $post['created']; ?></td>
			<td><?php echo $post['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), array(), __('Are you sure you want to delete # %s?', $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Professionals'); ?></h3>
	<?php if (!empty($user['Professional'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Years'); ?></th>
		<th><?php echo __('Months'); ?></th>
		<th><?php echo __('Ctc'); ?></th>
		<th><?php echo __('Company'); ?></th>
		<th><?php echo __('Designation'); ?></th>
		<th><?php echo __('Skills'); ?></th>
		<th><?php echo __('Notice'); ?></th>
		<th><?php echo __('PrevCompanies'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Professional'] as $professional): ?>
		<tr>
			<td><?php echo $professional['id']; ?></td>
			<td><?php echo $professional['user_id']; ?></td>
			<td><?php echo $professional['status']; ?></td>
			<td><?php echo $professional['years']; ?></td>
			<td><?php echo $professional['months']; ?></td>
			<td><?php echo $professional['ctc']; ?></td>
			<td><?php echo $professional['company']; ?></td>
			<td><?php echo $professional['designation']; ?></td>
			<td><?php echo $professional['skills']; ?></td>
			<td><?php echo $professional['notice']; ?></td>
			<td><?php echo $professional['prevCompanies']; ?></td>
			<td><?php echo $professional['created']; ?></td>
			<td><?php echo $professional['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'professionals', 'action' => 'view', $professional['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'professionals', 'action' => 'edit', $professional['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'professionals', 'action' => 'delete', $professional['id']), array(), __('Are you sure you want to delete # %s?', $professional['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Professional'), array('controller' => 'professionals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Refers'); ?></h3>
	<?php if (!empty($user['Refer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Refer'] as $refer): ?>
		<tr>
			<td><?php echo $refer['id']; ?></td>
			<td><?php echo $refer['post_id']; ?></td>
			<td><?php echo $refer['user_id']; ?></td>
			<td><?php echo $refer['created']; ?></td>
			<td><?php echo $refer['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'refers', 'action' => 'view', $refer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'refers', 'action' => 'edit', $refer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'refers', 'action' => 'delete', $refer['id']), array(), __('Are you sure you want to delete # %s?', $refer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Refer'), array('controller' => 'refers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
