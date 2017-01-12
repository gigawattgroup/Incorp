<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Incorp - Registered Agent Service - National Registered Agents</title>

    <link rel="stylesheet" href="css/main.css">

    <!--[if lt IE 10]>
      <script src="js/media.match.min.js"></script>
      <style>
        #intro {
          background-image: url("images/intro.png") !important;
        }
      </style>
    <![endif]-->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="wrapper">
    <header id="masthead">
      <div class="topbar">
        <div class="container">
          <div class="topbar-cart"><a href="#">Shopping Cart ($0)</a></div>
          <div class="topbar-login"><a href="#">Login</a></div>
        </div><!-- .container -->
      </div><!-- .topbar -->

      <div class="header">
        <div class="container">
          <a class="navbar-brand" href="/"><h1 class="sr-only">Incorp</h1></a>
          <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>

          <div class="header-phone"><a href="tel:+18002462677">1.800.246.2677</a></div>
          <div class="header-chat"><a href="#">Live Chat</a></div>
          <button type="button" class="btn btn-info btn-expert" data-toggle="modal" data-target="#expert-contact-form">Talk to an Expert</button>
        </div><!-- .container -->
      </div><!-- .header -->

      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-toggle-container">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false" aria-controls="menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="menu" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown dropdown-large">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Corporation Services</a>
              <?php include('_dropdown_corporation.php'); ?>
            </li>
            <li class="dropdown dropdown-large">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Business Services</a>
              <?php include('_dropdown_business.php'); ?>
            </li>
            <li class="dropdown dropdown-large">
              <a href="#about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Incorp</a>
              <?php include('_dropdown_about.php'); ?>
            </li>
            <li><a href="#about">Help Center</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="search-toggle">
    						<a href="#search-container">
                  <div class="search-icon"><i class="fa fa-search"></i><span class="sr-only">Search This Website</span></div>
                  <span class="search-text">Search</span>
                </a>
    				</li>
          </ul>
        </div><!-- #menu -->
        </div><!-- .container -->
      </nav>

      <div class="search-box-wrapper">
        <div class="search-box container">
          <form method="post">
            <input type="text" name="search" class="search-field" value="" placeholder="Search...">
          </form>
        </div>
      </div>

    </header><!-- #masthead -->

    <div id="main">
