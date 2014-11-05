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
      <h3 class="panel-title">Personal Details</h3>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <?php

            echo $this->Form->create('Personal');
            echo $this->Form->input('mobile', array(
              'maxlength' => '10',
              'class' => 'form-control',
              'placeholder' => 'Mobile Number',
              'label' => ''
              ));
            echo $this->Form->input('nationality', array(
              'options' => $nationalityOptions,
              'class' => 'form-control',
              'label' => ''
              ));
            echo $this->Form->input('location', array(
              'options' => $locationOptions,
              'class' => 'form-control',
              'label' => ''
              ));
            echo $this->Form->input('gender', array(
              'options' => $genderOptions,
              'class' => 'form-control',
              'label' => ''
              ));
            echo "Date of Birth";
            echo $this->Form->date('dob', array(
              'class' => 'form-control'
              ));
            echo "Upload Resume";
            echo $this->Form->file('resume', array(
              'class' => 'form-control'
              ));
            echo "<br />";
            echo $this->Form->Submit('Save', array('class' => 'btn btn-success'));
            echo $this->Form->end();

          ?>
          <?php 
            $path = $this->webroot."files/user/photo/"; 
            $dir = AuthComponent::user('photo_dir');
            $img = AuthComponent::user('photo');
          ?>
        </div>
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