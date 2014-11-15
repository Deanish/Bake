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
      'url' => array_merge(array('action' => 'index'), $this->params['pass'])
      ));
  ?>
    <div class="col-md-4" >
      <?php echo $this->Form->input('title', array(
        'required' => false,
        'class' => 'form-control',
        'placeholder' => 'Search by Job Title / Skills / Qualification',
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
      <h3 class="panel-title">Advt.</h3>
      </div>
      <div class="panel-body">
        <a href="#" class="thumbnail">
          <img src="<?php echo $this->webroot; ?>img/Advt/thumbnails.jpg">
        </a>
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
            <th><?php echo $this->Paginator->sort('Posted On');?></th>
            <th>Action</th>
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
            </td>
          </tr>
          <?php endforeach; ?>          
        </table>
        <p>
    <?php
      echo $this->Paginator->counter(array(
      'format' => __('Page {:page} of {:pages}')
      ));
    ?>  
  </p>
  <div class="paging">
    <?php
      echo $this->Paginator->prev('< ' . __('previous || '), array(), null, array('class' => 'prev disabled'));
      echo $this->Paginator->numbers(array('separator' => ''));
      echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
  </div>
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
