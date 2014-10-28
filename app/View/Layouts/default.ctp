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
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->webroot; ?>img/logo1.png">
	<?php
		// echo $this->Html->meta('icon');
    // $this->Html->meta('icon', $this->Html->url('/favicon.png'));

		echo $this->Html->css('bootstrap');
		// echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body style="background-color: #C0C0C0;" >
	
		






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
            <a href="#"><small>Jobs in Bangalore</small></a><br />
            <a href="#"><small>Jobs in Delhi</small></a><br />
            <a href="#"><small>Jobs in Mumbai</small></a><br />
            <a href="#"><small>Jobs in Kolkata</small></a><br />
            <a href="#"><small>Jobs in Chennai</small></a><br />
          </div>
          <div class="col-md-2" style="padding-top: 10px 10px;">
            <h6>Jobs by Categories</h6>
            <a href="#"><small>Accounts Jobs</small></a><br />
            <a href="#"><small>Bank Jobs</small></a><br />
            <a href="#"><small>BPO Jobs</small></a><br />
            <a href="#"><small>HR Jobs</small></a><br />
            <a href="#"><small>IT Jobs</small></a><br />
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
            <a href="#"><small>Partner Sites</small></a><br />
            <a href="#"><small>Terms & Conditions</small></a><br />
          </div>
          <div class="col-md-4" style="padding-top: 10px 10px;">
            <h5><span class="glyphicon glyphicon-phone-alt"></span> Call us: +91-98801 65531 </h5>
            <h5><span class="glyphicon glyphicon-envelope"></span> Mail us: support@vspell.com </h5>
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
