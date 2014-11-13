<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>


<div class="row">

  <?php
    echo $this->Form->create('Candidate', array(
      'url' => array_merge(array('controller' => 'candidates', 'action' => 'index'), $this->params['pass'])
      ));
  ?>
    <div class="col-md-4" >
      <?php echo $this->Form->input('title', array(
        'required' => false,
        'class' => 'form-control',
        'placeholder' => 'Job Tilte',
        'label' => ''
        )); 
      ?>
    </div>
    <div class="col-md-4" >
      <?php echo $this->Form->input('location', array(
        'required' => false,
        'options' => $locationOptions,
        'class' => 'form-control',
        'label' => ''
        )); 
      ?>
    </div>
    <div class="col-md-3" >
      <?php echo $this->Form->input('experience', array(
        'required' => false,
        'options' => $experienceOptions,
        'class' => 'form-control',
        'label' => ''
        )); 
      ?>
    </div>
    <div class="col-md-1" style="padding-top: 20px;">
      <?php echo $this->Form->Submit(__('Search', true), array('class' => 'btn btn-primary')); ?>
    </div>
  <?php echo $this->Form->end(); ?>

</div>

<div class="row">
  <div class="col-md-2" style="padding-top: 10px;">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title">Refine Search</h3>
      </div>
        <div class="panel panel-default">
          <div class="panel-heading">
          <h3 class="panel-title">Location</h3>
          </div>
          <div class="panel-body">
            <input type="checkbox" name="location" id="location1" value="Bangalore">Bangalore<br />
            <input type="checkbox" name="location" id="location2" value="Delhi">Delhi<br />
            <input type="checkbox" name="location" id="location3" value="Mumbai">Mumbai<br />
            <input type="checkbox" name="location" id="location4" value="Kolkata">Kolkata<br />
            <input type="checkbox" name="location" id="location5" value="Chennai">Chennai<br />
            <input type="checkbox" name="location" id="location6" value="Others">Others<br />
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
          <h3 class="panel-title">Experience</h3>
          </div>
          <div class="panel-body">
            <input type="radio" name="experience" id="experience1" value="0-2 Years">0-2 Years<br />
            <input type="radio" name="experience" id="experience2" value="2-5 Years">2-5 Years<br />
            <input type="radio" name="experience" id="experience3" value="5-10 Years">5-10 Years<br />
            <input type="radio" name="experience" id="experience4" value=" > 10 Years"> > 10 Years<br />
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
          <h3 class="panel-title">Category</h3>
          </div>
          <div class="panel-body">
            <input type="checkbox" name="category" id="category1" value="Accounts Jobs">Accounts Jobs<br />
            <input type="checkbox" name="category" id="category2" value="Bank Jobs">Bank Jobs<br />
            <input type="checkbox" name="category" id="category3" value="BPO Jobs">BPO Jobs<br />
            <input type="checkbox" name="category" id="category4" value="HR Jobs">HR Jobs<br />
            <input type="checkbox" name="category" id="category5" value="IT Jobs">IT Jobs<br />
            <input type="checkbox" name="category" id="category6" value="Others">Others<br />
          </div>
        </div>
    </div>
  </div>

  <div class="col-md-8" style="padding-top: 10px;">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title">Search Result</h3>
      </div>
      <div class="panel-body">

        <table width="100%" border="0">
          <tr>
            <th><?php echo $this->Paginator->sort('Job Title');?></th>
            <th><?php echo $this->Paginator->sort('Skills');?></th>
            <th><?php echo $this->Paginator->sort('Qualification');?></th>
            <th><?php echo $this->Paginator->sort('Location');?></th>
            <th><?php echo $this->Paginator->sort('Experience');?></th>
            <th><center><?php echo $this->Paginator->sort('Posted');?></center></th>
            <th></th>
          </tr>
          <?php
          $i = 0;
          foreach ($candidates as $candidate):
            $class = null;
            if ($i++ % 2 == 0) {
              $class = ' class="altrow"';
            }
          ?>
          <tr <?php echo $class;?> >
            <td><?php echo $candidate['Candidate']['title']; ?>&nbsp;</td>
            <td><?php echo $candidate['Candidate']['skills']; ?>&nbsp;</td>
            <td><?php echo $candidate['Candidate']['qualification']; ?>&nbsp;</td>
            <td><?php echo $candidate['Candidate']['location']; ?>&nbsp;</td>
            <td><?php echo $candidate['Candidate']['experience']; ?>&nbsp;</td>
            <td><?php echo $candidate['Candidate']['modified']; ?>&nbsp;</td>
            <td class="actions">
              <?php echo $this->Html->link(__('View', true), array('action' => 'view', $candidate['Candidate']['id'])); ?>
<!--               <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $candidate['Candidate']['id'])); ?>
              <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $candidate['Candidate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidate['Candidate']['id'])); ?> -->
            </td>
          </tr>
          <?php endforeach; ?>          
        </table>

      </div>
    </div>
  </div>

  <div class="col-md-2" style="padding-top: 10px;">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title">Featured</h3>
      </div>
      <div class="panel-heading">
      <h3 class="panel-title">Companies</h3>
      </div>
      <div class="panel-body">
        <a href="#" class="thumbnail">
          <img src="<?php echo $this->webroot; ?>img/FeaturedCompanies/thumbnails.jpg">
        </a>
      </div>
      <div class="panel-heading">
      <span class="panel-title">Employers</h3>
      </div>
      <div class="panel-body">
        <a href="#" class="thumbnail">
          <img src="<?php echo $this->webroot; ?>img/TopEmployers/thumbnails.jpg">          
        </a>
      </div>
      <div class="panel-heading">
      <h3 class="panel-title">Advt.</h3>
      </div>
      <div class="panel-body">
        <a href="#" class="thumbnail">
          <img src="<?php echo $this->webroot; ?>img/Advt/thumbnails.jpg">
        </a>
      </div>
    </div>
  </div>
</div>
