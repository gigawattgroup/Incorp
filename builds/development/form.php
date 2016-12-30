<?php include_once('_header.php'); ?>

<div class="title-banner">
  <div class="container">
        <div class="col-md-12">
          <h1>Select a Package</h1>
        </div>
  </div><!-- .container -->
</div><!-- .title-banner -->

  <?php include_once('_breadcrumbs.php'); ?>

  <section id="form-wizard">
    <div class="container">
      <form method="post">
      <div class="row">
        <div class="col-md-7">

            <div class="form-group">
              <div class="row">
                <div class="col-xs-12">
                  <p class="heading">Contact Info</p>
                </div>
                <div class="col-xs-12">
                  <label for="ex2">Name</label> <!-- row has 1 title -->
                </div>
                <div class="col-xs-6">
                  <label class="sr-only" for="nameFirst">First Name</label>
                  <input type="text" class="form-control" id="nameFirst" placeholder="First Name">
                </div>
                <div class="col-xs-6">
                  <label class="sr-only" for="nameLast">Last Name</label>
                  <input type="text" class="form-control" id="nameLast" placeholder="Last Name">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-xs-6">
                  <label for="email">Email</label> <!-- row has 2 titles -->
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="col-xs-6">
                  <label for="phone">Phone</label>
                  <input type="tel" class="form-control" id="phone">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-xs-12">
                  <label for="address1">Address 1</label>
                  <input type="text" class="form-control" id="address1">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-xs-12">
                  <label for="address2">Address 2</label>
                  <input type="text" class="form-control" id="address2">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-xs-6">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city">
                </div>
                <div class="col-xs-2">
                  <label for="state">State</label>
                  <select class="form-control" id="state">
                    <option value="AL">AL</option>
                  	<option value="AK">AK</option>
                  	<option value="AZ">AZ</option>
                  	<option value="AR">AR</option>
                  	<option value="CA">CA</option>
                  	<option value="CO">CO</option>
                  	<option value="CT">CT</option>
                  	<option value="DE">DE</option>
                  	<option value="DC">DC</option>
                  	<option value="FL">FL</option>
                  	<option value="GA">GA</option>
                  	<option value="HI">HI</option>
                  	<option value="ID">ID</option>
                  	<option value="IL">IL</option>
                  	<option value="IN">IN</option>
                  	<option value="IA">IA</option>
                  	<option value="KS">KS</option>
                  	<option value="KY">KY</option>
                  	<option value="LA">LA</option>
                  	<option value="ME">ME</option>
                  	<option value="MD">MD</option>
                  	<option value="MA">MA</option>
                  	<option value="MI">MI</option>
                  	<option value="MN">MN</option>
                  	<option value="MS">MS</option>
                  	<option value="MO">MO</option>
                  	<option value="MT">MT</option>
                  	<option value="NE">NE</option>
                  	<option value="NV">NV</option>
                  	<option value="NH">NH</option>
                  	<option value="NJ">NJ</option>
                  	<option value="NM">NM</option>
                  	<option value="NY">NY</option>
                  	<option value="NC">NC</option>
                  	<option value="ND">ND</option>
                  	<option value="OH">OH</option>
                  	<option value="OK">OK</option>
                  	<option value="OR">OR</option>
                  	<option value="PA">PA</option>
                  	<option value="RI">RI</option>
                  	<option value="SC">SC</option>
                  	<option value="SD">SD</option>
                  	<option value="TN">TN</option>
                  	<option value="TX">TX</option>
                  	<option value="UT">UT</option>
                  	<option value="VT">VT</option>
                  	<option value="VA">VA</option>
                  	<option value="WA">WA</option>
                  	<option value="WV">WV</option>
                  	<option value="WI">WI</option>
                  	<option value="WY">WY</option>
                  </select>
                </div>
                <div class="col-xs-4">
                  <label for="zipCode">Zip Code</label>
                  <input type="number" class="form-control" id="zipCode">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-xs-12">
                  <p class="heading">Contact Info</p>
                </div>
                <div class="col-xs-12">
                  <label for="ex2">Name</label> <!-- row has 1 title -->
                </div>
                <div class="col-xs-6">
                  <label class="sr-only" for="nameFirst2">First Name</label>
                  <input type="text" class="form-control" id="nameFirst2" placeholder="First Name">
                </div>
                <div class="col-xs-6">
                  <label class="sr-only" for="nameLast2">Last Name</label>
                  <input type="text" class="form-control" id="nameLast2" placeholder="Last Name">
                </div>
              </div>
            </div>

            <!-- Form Checkbox -->
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" checked>
                <p class="selections">Subscribe to Our Newsletter</p>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                <p class="selections">Subscribe to Our Newsletter</p>
              </label>
            </div>

            <!-- Form Radios -->
            <div class="row">
              <div class="col-xs-12">
                <p class="heading">Radios</p>
              </div>
            </div>
            <fieldset class="row form-group">
              <div class="col-sm-10">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <p class="selections">
                      Option 1: Selected
                    </p>
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <p class="selections">
                      Option 2: Select
                    </p>
                  </label>
                </div>
                <div class="form-check disabled">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                    <p class="selections">
                      Option 3: Disabled
                    </p>
                  </label>
                </div>
              </div>
            </fieldset>

        </div> <!-- .col-md-7 -->

        <div class="col-md-5 stick-to-header">

            <div class="order-summary-box">
              <div class="order-title">Your Order</div>
              <ul class="services-summary">
                <li>
                  <span class="service-title-header">Item</span>
                  <span class="service-price-header">Subtotal</span>
                </li>
                <!-- START: loop through selected services -->
                <li>
                  <span class="service-title">Registered Agent Services</span>
                  <span class="service-price">$99.00</span>
                </li>
                <li>
                  <span class="service-title">LLC</span>
                  <span class="service-price">$99.00</span>
                </li>
                <!-- END: loop through selected services -->

              </ul>

              <a role="button" data-toggle="collapse" href="#coupon-field" aria-expanded="false" aria-controls="coupon-field">
                Have a coupon code?
              </a>
              <div class="order-total">Total: $198.00</div>
              <div class="clearfix"></div>
              <div class="collapse" id="coupon-field">
                <div class="input-group">
                  <input class="form-control" aria-label="Enter Coupon Code" placeholder="Coupon Code">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-default">Apply</button>
                  </div>
                </div><!-- .input-group -->
              </div>
              <button type="submit" class="btn btn-order">Order Now</button>
            </div>

        </div><!-- .col-md-4 -->

        </div><!-- .row -->
        </form>
      </div><!-- .container -->
  </section><!-- #table -->

<?php include_once('_footer.php'); ?>
