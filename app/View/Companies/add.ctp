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
      <div class="panel-heading">
      <h3 class="panel-title text-center">Job Post Details</h3>
      </div>
        <div class="col-md-6 col-md-offset-3" style="padding-top: 10px;">
          <div class="panel panel-default">
            <div class="panel-heading">
            <h3 class="panel-title text-center">Recruiter Details</h3>
            </div>
            <div style="padding: 10px;">
              <?php

                echo $this->Form->create('Company');
                echo $this->Form->input('name');
                echo $this->Form->input('profile');
                echo $this->Form->file('logo');
                echo $this->Form->input('url');
                echo $this->Form->input('person');
                echo $this->Form->input('contact', array('maxlength' => '10'));
                echo $this->Form->end('Submit to Post Job');

              ?>

            </div>
          </div>
        </div>
    </div>
  </div>
</div>