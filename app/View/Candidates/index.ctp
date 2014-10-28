<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>


<div class="row">
  <form>
    <div class="col-md-4" style="padding-top: 10px;">
      <input type="text" name="txt1" placeholder="Type Job Title, Skills etc." class="form-control">
    </div>
    <div class="col-md-4" style="padding-top: 10px;">
      <input type="text" name="txt2" placeholder="Type desired Job Location" class="form-control">
    </div>
    <div class="col-md-3" style="padding-top: 10px;">
      <select class="form-control">
        <option>- Select Experince - </option>
        <option>0-2 Year</option>
        <option>2-5 Year</option>
        <option>5-10 Year</option>
        <option> > 10 Year</option>
      </select>
    </div>
    <div class="col-md-1" style="padding-top: 10px;">
      <input type="submit" value="Search" class="btn btn-primary">
    </div>
  </form>
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



