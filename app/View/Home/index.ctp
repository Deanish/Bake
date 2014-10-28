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
              <!-- <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
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
  	<form>
		<input type="text" name="txt1" placeholder="Type Job Title, Skills etc." class="form-control"><br />
		<input type="text" name="txt2" placeholder="Type desired Job Location" class="form-control"><br />
		<select class="form-control">
			<option>- Select Experince - </option>
			<option>0-2 Year</option>
			<option>2-5 Year</option>
			<option>5-10 Year</option>
			<option> > 10 Year</option>
		</select><br />
		<input type="submit" value="Search" class="btn btn-primary">
  	</form>
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
        Featured jobs<br />
        Featured jobs<br />
        Featured jobs<br />
        Featured jobs<br />
        Featured jobs<br />
      </div>
    </div>
  </div>
  <div class="col-md-8" style="padding-top: 10px;">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title">Featured Companies</h3>
      </div>
      <div class="panel-body">
        Featured Companies<br />
        Featured Companies<br />
        Featured Companies<br />
        Featured Companies<br />
        Featured Companies<br />
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
        Resume Services<br />
        Resume Services<br />
        Resume Services<br />
        Resume Services<br />
        Resume Services<br />
      </div>
    </div>
  </div>
  <div class="col-md-8" style="padding-top: 10px;">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title">Counselling Services</h3>
      </div>
      <div class="panel-body">
        Counselling Services<br />
        Counselling Services<br />
        Counselling Services<br />
        Counselling Services<br />
        Counselling Services<br />
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
              <h3 class="panel-title">By Functional Area</h3>
            </div>
            <div class="panel-body">
              By Functional Area<br />
              By Functional Area<br />
              By Functional Area<br />
              By Functional Area<br />
              By Functional Area<br />
            </div>
          </div>
        </div>
        <div class="col-md-4" style="padding-top: 10px;">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">By Industry</h3>
            </div>
            <div class="panel-body">
              By Industry<br />
              By Industry<br />
              By Industry<br />
              By Industry<br />
              By Industry<br />
            </div>
          </div>
        </div>
        <div class="col-md-4" style="padding-top: 10px;">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">By Location</h3>
            </div>
            <div class="panel-body">
              By Location<br />
              By Location<br />
              By Location<br />
              By Location<br />
              By Location<br />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>