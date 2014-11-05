<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>


<div class="row">
  <div class="col-md-9 col-md-offset-1" style="padding-top: 10px">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title">Professional Details</h3>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <?php

          echo $this->Form->create('Professional');
          echo $this->Form->input('status', array(
              'options' => $statusOptions,
              'class' => 'form-control',
              'label' => ''
              ));
          echo "<label>Experience</label>";
          echo $this->Form->input('years', array(
              'options' => $yearsOptions,
              'class' => 'col-md-4',
              'label' => false
              ));
          echo $this->Form->input('months', array(
              'options' => $monthsOptions,
              'class' => 'col-md-4',
              'label' => false
              ));
          echo "<br />";
          echo $this->Form->input('ctc', array(
              'class' => 'form-control',
              'placeholder' => 'Current CTC',
              'label' => ''
              ));
          echo $this->Form->input('company', array(
              'class' => 'form-control',
              'placeholder' => 'Current Company Name',
              'label' => ''
              ));
          echo $this->Form->input('designation', array(
              'class' => 'form-control',
              'placeholder' => 'Current Designation',
              'label' => ''
              ));
          echo $this->Form->input('skills', array(
              'class' => 'form-control',
              'placeholder' => 'Skills',
              'label' => ''
              ));
          echo $this->Form->input('notice', array(
              'class' => 'form-control',
              'placeholder' => 'Notice Period',
              'label' => ''
              ));
          echo $this->Form->input('prevCompanies', array(
              'class' => 'form-control',
              'placeholder' => 'List of previous companies',
              'label' => ''
              ));
          echo "<br />";
          echo $this->Form->Submit('Save', array('class' => 'btn btn-success'));
          echo $this->Form->end();

          ?>
        </div>
        <?php 
          $path = $this->webroot."files/user/photo/"; 
          $dir = AuthComponent::user('photo_dir');
          $img = AuthComponent::user('photo');
        ?>
        <div class="col-md-6" style="padding-top: 10px;">
          <div class="panel panel-default">
            <div class="panel-heading text-center">
            <h3 class="panel-title text-center">Profile Picture</h3>
            </div>
            <div class="panel-body">
              <img class="pull-right" src="<?php echo $path.$dir.'/'.$img; ?>" width="345px" height="200px">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>