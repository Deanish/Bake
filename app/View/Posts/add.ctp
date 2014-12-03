<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>


<?php $count = 0; foreach ($posts as $post): ?>
  <?php    
    if(($post['Post']['user_id']) == AuthComponent::user('id')) {
      $count = $count + 1;
    }
  ?>
<?php endforeach; ?>

<?php if(((AuthComponent::user('type') == 1) && ($count < 5)) || (AuthComponent::user('type') == 2)): ?>
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

                  echo $this->Form->create('Post', array('type' => 'file'));
                  echo $this->Form->input('title', array(
                    'class' => 'form-control',
                    'placeholder' => 'Job Title / Designation',
                    'label' => ''
                    ));
                  echo $this->Form->input('skills', array(
                    'class' => 'form-control',
                    'placeholder' => 'Skills Required',
                    'label' => ''
                    ));
                  echo $this->Form->input('qualification', array(
                    'class' => 'form-control',
                    'placeholder' => 'Minimum Qualification',
                    'label' => ''
                    ));
                  echo $this->Form->input('vacancies', array(
                    'class' => 'form-control',
                    'placeholder' => 'Number of vacancies',
                    'label' => ''
                    ));
                  echo $this->Form->input('description', array(
                    'class' => 'form-control',
                    'placeholder' => 'Job Description',
                    'label' => ''
                    ));
                  echo $this->Form->input('experience', array(
                    'options' => $experienceOptions,
                    'class' => 'form-control',
                    'label' => ''
                    ));
                  echo $this->Form->input('salary', array(
                    'class' => 'form-control',
                    'placeholder' => 'Salary offered',
                    'label' => ''
                    ));
                  echo $this->Form->input('location', array(
                    'options' => $locationOptions,
                    'class' => 'form-control',
                    'label' => ''
                    ));
                  echo $this->Form->input('industryType', array(
                    'options' => $industryOptions,
                    'class' => 'form-control',
                    'label' => ''
                    ));
                ?>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title text-center">Company Details</h3>
              </div>
              <div style="padding: 10px;">

                <?php
                  echo $this->Form->input('companyName', array(
                    'class' => 'form-control',
                    'placeholder' => 'Company Name',
                    'label' => ''
                    ));
                  echo $this->Form->input('profile', array(
                    'class' => 'form-control',
                    'placeholder' => 'Company Profile',
                    'label' => ''
                    ));
                  echo "<label>Upload Company Logo</label>";
                  echo $this->Form->file('photo', array(
                    'class' => 'form-control'
                    ));
                  echo $this->Form->input('url', array(
                    'class' => 'form-control',
                    'placeholder' => 'Company website URL',
                    'label' => ''
                    ));
                  echo $this->Form->input('person', array(
                    'class' => 'form-control',
                    'placeholder' => 'Contact Person Name',
                    'label' => ''
                    ));
                  echo $this->Form->input('contact', array(
                    'maxlength' => '10',
                    'class' => 'form-control',
                    'placeholder' => 'Contact Number',
                    'label' => ''
                    ));
                  echo "<br />";
                  echo $this->Form->Submit('Post Job', array('class' => 'btn btn-success'));
                  echo $this->Form->end();

                ?>
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>
<?php else: ?>
  <div class="row">
    <div class="col-md-12" style="padding-top: 10px;">
      <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title text-center">Please Change your account type</h3>
        </div>
        You have posted <?php echo $count; ?> posts. Which exceeds the job posts in basic account type.
      </div>
    </div>
  </div>
<?php endif; ?>