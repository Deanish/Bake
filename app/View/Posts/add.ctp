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
            <h3 class="panel-title text-center">Job Details</h3>
            </div>
            <div style="padding: 10px;">
              <?php

                echo $this->Form->create('Post');
                echo $this->Form->input('title');
                echo $this->Form->input('skills');
                echo $this->Form->input('qualification');
                echo $this->Form->input('vacancies');
                echo $this->Form->input('description');
                echo $this->Form->input('experience', array('options' => $experienceOptions));
                echo $this->Form->input('salary');
                echo $this->Form->input('location', array('options' => $locationOptions));
                echo $this->Form->input('industryType', array('options' => $industryOptions));
                echo $this->Form->end('Next');

              ?>
            </div>
          </div>
        </div>

    </div>
  </div>
</div>