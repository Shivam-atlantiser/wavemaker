<?php
    /**
     * Header Template 
     * 
     * @package Wavemaker
     * 
     */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Wavemaker</title>
    <meta name="description" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >
  <?php wp_body_open(); ?>
  <nav
      class="navbar navbar-expand-lg navbar-light bg-white w-100"
      role="navigation"
    >
      <div class="container position-relative">
        <a class="navbar-brand" href="./index.html">
          <img src="./assets/img/images/logo.png" alt="" srcset="" />
        </a>

        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbar-collapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="collapse navbar-collapse justify-content-end mt-2 mt-lg-0"
          id="navbar-collapse"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="process.html">Process</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blogs.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.html">About</a>
            </li>
            <li class="nav-item ml-lg-3 mt-3 mt-lg-0">
              <a class="btn btn-secondary" href="#" target="_blank">
                Get started
              </a>
            </li>
          </ul>
        </div>
        <!-- end .navbar-collapse -->
      </div>
      <!-- end .container -->
    </nav>