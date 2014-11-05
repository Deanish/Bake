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
      <h3 class="panel-title">Educational Details</h3>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <?php

          echo $this->Form->create('Education');
          echo $this->Form->input('qualification', array(
            'options' => $qualificationOptions,
              'class' => 'form-control',
              'label' => ''
            ));
          echo $this->Form->input('specialization', array(
            'options' => $specializationOptions,
              'class' => 'form-control',
              'label' => ''
              ));
          echo $this->Form->input('institute', array(
              'class' => 'form-control',
              'placeholder' => 'Institute Name',
              'label' => ''
              ));
          echo $this->Form->input('university', array(
              'class' => 'form-control',
              'placeholder' => 'University Name',
              'label' => ''
              ));
          echo $this->Form->input('marks', array(
              'class' => 'form-control',
              'placeholder' => 'Marks/Grade/Percentage',
              'label' => ''
              ));
          echo $this->Form->input('yop', array(
              'class' => 'form-control',
              'placeholder' => 'Year of Passing',
              'label' => ''
              ));
          echo $this->Form->input('courseType', array(
              'options' => $courseOptions,
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