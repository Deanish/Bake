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
            echo $this->Form->input('mobile', array('maxlength' => '10'));
            echo $this->Form->input('nationality', array('options' => $nationalityOptions));
            echo $this->Form->input('location', array('options' => $locationOptions));
            echo $this->Form->input('gender', array('options' => $genderOptions));
            echo $this->Form->date('dob');
            echo $this->Form->file('resume');
            echo $this->Form->end('Save');

          ?>
        </div>
        <div class="col-md-6" style="padding-top: 10px;">
          <div class="panel panel-default">
            <div class="panel-heading text-center">
            <h3 class="panel-title text-center">Profile Picture</h3>
            </div>
            <div class="panel-body">
              <img class="pull-right" src="<?php echo $this->webroot; ?>img/default-img.jpg" width="345px" height="200px">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>