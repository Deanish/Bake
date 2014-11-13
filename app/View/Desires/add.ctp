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
      <h3 class="panel-title">Desired Job Details</h3>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <?php

            echo $this->Form->create('Desire');
            echo $this->Form->input('location', array(
              'options' => $locationOptions,
              'class' => 'form-control',
              'label' => ''
              ));
            echo $this->Form->input('skills', array(
              'class' => 'form-control',
              'placeholder' => 'Skills',
              'label' => ''
              ));
            echo $this->Form->input('qualification', array(
              'class' => 'form-control',
              'placeholder' => 'Highest Qualification',
              'label' => ''
              ));
            echo $this->Form->input('experience', array(
              'options' => $experienceOptions,
              'class' => 'form-control',
              'label' => ''
              ));
            echo $this->Form->input('industryType', array(
              'options' => $industryOptions,
              'class' => 'form-control',
              'label' => ''
              ));
            echo $this->Form->input('jobType', array(
              'options' => $jobOptions,
              'class' => 'form-control',
              'label' => ''
              ));
            echo $this->Form->input('shiftType', array(
              'options' => $shiftOptions,
              'class' => 'form-control',
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