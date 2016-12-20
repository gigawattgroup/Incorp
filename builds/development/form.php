<?php include_once('_header.php'); ?>

  <div id="pricedescript">
    <div class="container">
          <div class="col-md-12">
            <h1>Select a Package</h1>
          </div>
    </div><!-- .container -->
  </div><!-- .pricedescript -->

  <?php include_once('_breadcrumbs.php'); ?>

  <section id="form">
    <div class="container">
      <div class="row">

        <div class="col-md-7">
          <p class="form_sect_headings">Personal Information</p>
          <form>
            <label for="fname">Name</label><br>
            <input type="text" id="fname" name="fname" value="First Name">
            <input type="text" id="lname" name="lname" value="Last Name">
            <br>
            <label for="fname">Name</label><br>
            <input type="text" id="fname" name="fname" value="First Name">
            <input type="text" id="lname" name="lname" value="Last Name">
          </form>
        </div>

        <!--<div class="col-md-1"></div>-->

        <div class="col-md-5">
          <div id="tabledeal">
            <div id="order_summary_box"><p id="order_title">Your Order</p>
              <ul id="services_selected">Item
                <li>Registered Agent Services
                  <li>LLC</li>
                </li>
              </ul>
              <ul id="services_quantity">Subtotal
                <li>$99
                  <li>$99</li>
                </li>
              </ul>
              <button type="button" class="btn btn-lg btn-success" id="order_summary_button">Get Started</button>
            </div>
          </div><!-- #tabledeal -->
        </div><!-- .col-md-4 -->

        </div><!-- .row -->
      </div><!-- .container -->
  </section><!-- #table -->

<?php include_once('_footer.php'); ?>
