<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

/*$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())*/
?>
<!DOCTYPE html>
<html>
<head>
  <?php echo $this->Html->charset(); ?>
  <title>
    VSpell
  </title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->webroot; ?>img/icon.png">
  <?php

    echo $this->Html->css('bootstrap');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
  ?>
</head>
<body style="background-color: #C0C0C0;" >
  
    



<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="min-height: 80px;">
      <div class="container">
        <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand"><img src="<?php echo $this->webroot; ?>img/logo.png" height="80px" width="80px"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><?php echo $this->html->link(' Home',array('controller' => 'home', 'action' => 'index'),array('class' => 'glyphicon glyphicon-home')); ?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle glyphicon glyphicon-search" data-toggle="dropdown"> JobSeeker<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->html->link('Search Jobs',array('controller' => 'candidates', 'action' => 'index')); ?></li>
            <li><?php echo $this->html->link('Applied Jobs',array('controller' => 'interests', 'action' => 'index')); ?></li>
            <li><?php echo $this->html->link('Account Settings', array('controller' => 'users', 'action' => 'edit',AuthComponent::user("id"))); ?></li>
          </ul>
        </li>
        <li><?php echo $this->html->link(' ResumeServices',array('controller' => 'resumes', 'action' => 'index'),array('class' => 'glyphicon glyphicon-list-alt')); ?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle glyphicon glyphicon-cog" data-toggle="dropdown"> ProfileSettings<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->html->link('Personal Details',array('controller' => 'personals', 'action' => 'add')); ?></li>
            <li><?php echo $this->html->link('Educational Details',array('controller' => 'educations', 'action' => 'add')); ?></li>
            <li><?php echo $this->html->link('Professional Details',array('controller' => 'professionals', 'action' => 'add')); ?></li>
            <li><?php echo $this->html->link('Desired Job Details',array('controller' => 'desires', 'action' => 'add')); ?></li>
            <li><?php echo $this->html->link('View Details',array('controller' => 'users', 'action' => 'view',AuthComponent::user("id"))); ?></li>
          </ul>
        </li>      
      	<li><?php echo $this->html->link(' JobCounselling',array('controller' => 'resumes', 'action' => 'counselling'),array('class' => 'glyphicon glyphicon-thumbs-up')); ?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <?php if(AuthComponent::user()) { ?>
          <a href="#" class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown"><?php echo " " . AuthComponent::user('firstname'); ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->html->link('Account Settings', array('controller' => 'users', 'action' => 'edit',AuthComponent::user("id"))); ?></li>
            <li><?php echo $this->html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>            
          </ul>
          <?php } 
           else { ?>
            <li><?php echo $this->html->link('Login', array('controller' => 'users', 'action' => 'login')); ?></li>
          <?php } ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>




		<div class="container" style="padding-top: 90px; background-color: #E0E0E0;">

      <?php echo $this->Session->flash(); ?>

      <?php echo $this->fetch('content'); ?>
      <div class="container" style="padding-top: 20px;"></div>
    </div>
  <div class="footer">
    <div class="container">
        <div class="row">
          <div class="col-md-2" style="padding-top: 10px 10px;">
            <h6>Jobs by Location</h6>
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
            <?php echo $this->Html->link('Pune', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'location' => 'Pune'
                )
              )); 
            ?><br />
            <?php echo $this->Html->link('Gurgaon', array(
              'controller' => 'candidates', 
              'action' => 'index', 
              '?' => array(
                'location' => 'Gurgaon'
                )
              )); 
            ?><br />
          </div>
          <div class="col-md-2" style="padding-top: 10px 10px;">
            <h6>Jobs by Qualification</h6>
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
            ?><br />
          </div>
          <div class="col-md-2" style="padding-top: 10px 10px;">
            <h6>Services</h6>
            <a href="#"><small>Resume Services</small></a><br />
            <a href="#"><small>Counselling Services</small></a><br />
          </div>
          <div class="col-md-2" style="padding-top: 10px 10px;">
            <h6>VSpell</h6>
            <a href="#"><small>Feedback</small></a><br />
            <a href="#"><small>About Us</small></a><br />
            <a href="#"><small>Contact Us</small></a><br />
            <a href="#"><small>Terms & Conditions</small></a><br />
          </div>
          <div class="col-md-4" style="padding-top: 10px 10px;">
            <h5><span class="glyphicon glyphicon-phone-alt"></span> Call us: +91-98801 00000 </h5>
            <h5><span class="glyphicon glyphicon-envelope"></span> Mail us: support@vspellconsultancy.com </h5>
            <h5><span class="glyphicon glyphicon-copyright-mark"></span> 2014 VSpell </h5>
            <h5><span class="glyphicon glyphicon-signal"></span> Developed by <a href="http://skylabsinc.in/" target="blank"><span style="color: #000; ">SkyLabs</span></a> </h5>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="padding-top: 20px;"></div>
  
  <?php 
    echo $this->Html->script('jquery');
    echo $this->Html->script('bootstrap');  
  ?>
</body>
</html>
