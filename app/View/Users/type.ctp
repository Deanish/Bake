<div class="row">
	<div class="col-md-12" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">Choose your account type</h3>
			</div>

				<div class="col-md-3 col-md-offset-3" style="padding-top: 10px;">
					<div class="panel panel-default">
						<div class="panel-heading">
						<h3 class="panel-title text-center">Basic</h3>
						</div>
						<div style="padding: 10px;">
							<table>
								<tr>
									<th>Students Search:</th>
									<td>Unlimited</td>
								</tr>
								<tr>
									<th class="pull-right">Job post:</th>
									<td>5 posts</td>
								</tr>
								<tr>
									<th class="pull-right">Price:</th>
									<td>Free</td>
								</tr>
							</table>
						</div>
					</div>
				</div>	

				<div class="col-md-3" style="padding-top: 10px;">
					<div class="panel panel-default">
						<div class="panel-heading">
						<h3 class="panel-title text-center">Premium</h3>
						</div>
						<div style="padding: 10px;">
							<table>
								<tr>
									<th>Students Search:</th>
									<td>Unlimited</td>
								</tr>
								<tr>
									<th class="pull-right">Job post:</th>
									<td>Unlimited</td>
								</tr>
								<tr>
									<th class="pull-right">Price:</th>
									<td>₹500/month</td>
								</tr>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="col-md-4 col-md-offset-4" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">Select your account type</h3>
			</div>
			<div style="padding: 10px;">
				<table>
					<tr>						
						<?php 
							echo $this->Form->create('User');
							echo $this->Form->input('type', array(
								'options' => $typeOptions,
								'class' => 'form-control',
								'label' => ''
								));
							echo "<br />";
							echo $this->Form->submit('Save',array('class' => 'btn btn-success'));
							echo $this->Form->end();
						?>
					</tr>
				</table>
			</div>
		</div>
	</div>	

</div>