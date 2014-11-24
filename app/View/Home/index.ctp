<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active "></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo $this->webroot; ?>img/banner.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo $this->webroot; ?>img/banner2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo $this->webroot; ?>img/banner3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo $this->webroot; ?>img/banner4.jpg" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


<div class="row">
  <div class="col-md-4" style="padding-top: 10px;">

    <?php
      echo $this->Form->create('Candidate', array(
        'url' => array_merge(array('controller' => 'candidates', 'action' => 'index'), $this->params['pass'])
        ));
      echo $this->Form->input('title', array(
        'required' => false,
        'class' => 'form-control',
        'placeholder' => 'Search by Job Title / Skills / Qualification',
        'label' => ''
        ));
      echo $this->Form->input('location', array(
        'required' => false,
        'options' => $locationOptions,
        'class' => 'form-control',
        'label' => ''
        ));
      echo $this->Form->input('experience', array(
        'required' => false,
        'options' => $experienceOptions,
        'class' => 'form-control',
        'label' => ''
        ));
      echo "<br />";
      echo $this->Form->Submit(__('Search for Job', true), array('class' => 'btn btn-primary'));
      echo $this->Form->end();
    ?>

  </div>
  <div class="col-md-3 col-md-offset-1"><img src="<?php echo $this->webroot; ?>img/logo1.png" height="200px" width="200px"></div>
  <div class="col-md-4" style="padding-top: 10px;">
  	<form>
      <br />
  		<?php echo $this->html->link('Login',array('controller' => 'users', 'action' => 'login'),array('class' => 'btn btn-primary')); ?><br /><br />      
  		<?php echo $this->html->link('New User? Register',array('controller' => 'users', 'action' => 'add'),array('class' => 'btn btn-success')); ?><br /><br />
  	</form>
  </div>
</div>

<div class="row">
  <div class="col-md-4" style="padding-top: 10px;">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title">Featured jobs</h3>
      </div>
      <div class="panel-body">
        <table width="100%">
          <?php $count = 0; ?>
          <?php foreach ($user as $user): ?>
            <tr>
              <td><?php echo h($user['Post']['title']); ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-8" style="padding-top: 10px;">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title">Featured Companies</h3>
      </div>
      <div class="panel-body">
        <img src="<?php echo $this->webroot; ?>img/FeaturedCompanies/1.jpg" height="100px" width="117px"/>
        <img src="<?php echo $this->webroot; ?>img/FeaturedCompanies/2.jpg" height="100px" width="116px"/>
        <img src="<?php echo $this->webroot; ?>img/FeaturedCompanies/3.jpg" height="100px" width="116px"/>
        <img src="<?php echo $this->webroot; ?>img/FeaturedCompanies/4.jpg" height="100px" width="116px"/>
        <img src="<?php echo $this->webroot; ?>img/FeaturedCompanies/5.jpg" height="100px" width="116px"/>
        <img src="<?php echo $this->webroot; ?>img/FeaturedCompanies/6.jpg" height="100px" width="117px"/>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4" style="padding-top: 10px;">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title">Resume Services</h3>
      </div>
      <div class="panel-body">
        <p>
          VSpell Consultancy offers various exclusive resume services. Freshers Working Professionals can now refer our resume format and samples.
          <br /><br />
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-8" style="padding-top: 10px;">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title">Counselling Services</h3>
      </div>
      <div class="panel-body">
        <p>
          We are primarily a counselling organisation and all our other services, including those for corporate entities and other organizations.
          <br /><br /><br />
        </p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12" style="padding-top: 10px;">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title">Browse Jobs</h3>
      </div>
      <div class="row">
        <div class="col-md-4" style="padding-top: 10px;">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">By Qualification</h3>
            </div>
            <div class="panel-body">

            <?php echo $this->Html->link('BCA', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'title' => 'BCA'
                )
              )); 
            ?>,
            <?php echo $this->Html->link('BSc', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'title' => 'BSc'
                )
              )); 
            ?>,
            <?php echo $this->Html->link('BCom', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'title' => 'BCom'
                )
              )); 
            ?><br />
            <?php echo $this->Html->link('MCA', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'title' => 'MCA'
                )
              )); 
            ?>,
            <?php echo $this->Html->link('MSc', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'title' => 'MSc'
                )
              )); 
            ?>,
            <?php echo $this->Html->link('MCom', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'title' => 'MCom'
                )
              )); 
            ?><br />
            <?php echo $this->Html->link('MBA', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'title' => 'MBA'
                )
              )); 
            ?>,
            <?php echo $this->Html->link('MTech', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'title' => 'MTech'
                )
              )); 
            ?><br />
            <?php echo $this->Html->link('BE', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'title' => 'BE'
                )
              )); 
            ?>,
            <?php echo $this->Html->link('BTech', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'title' => 'BTech'
                )
              )); 
            ?><br /><br />

            </div>
          </div>
        </div>
        <div class="col-md-4" style="padding-top: 10px;">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">By Location</h3>
            </div>
            <div class="panel-body">

            <?php echo $this->Html->link('Bangalore', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'location' => 'Bangalore'
                )
              )); 
            ?><br />
            <?php echo $this->Html->link('Delhi', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'location' => 'Delhi'
                )
              )); 
            ?><br />
            <?php echo $this->Html->link('Mumbai', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'location' => 'Mumbai'
                )
              )); 
            ?><br />
            <?php echo $this->Html->link('Kolkata', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'location' => 'Kolkata'
                )
              )); 
            ?><br />
            <?php echo $this->Html->link('Chennai', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'location' => 'Chennai'
                )
              )); 
            ?><br />            

            </div>
          </div>
        </div>
        <div class="col-md-4" style="padding-top: 10px;">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">By Experience</h3>
            </div>
            <div class="panel-body">

            <?php echo $this->Html->link('0-2 Years', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'experience' => '0-2 Years'
                )
              )); 
            ?><br />
            <?php echo $this->Html->link('2-5 Years', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'experience' => '2-5 Years'
                )
              )); 
            ?><br />
            <?php echo $this->Html->link('5-10 Years', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'experience' => '5-10 Years'
                )
              )); 
            ?><br />
            <?php echo $this->Html->link('> 10 Years', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'experience' => '> 10 Years'
                )
              )); 
            ?><br /><br />

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>