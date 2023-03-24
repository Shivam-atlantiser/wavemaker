<?php
/**
 * 
 * Template name: Contact-us
 * 
 * @package Wavemaker
 * 
 */
get_header();
 ?>

<section class="pb-6 pb-lg-7 about-hero about-page-hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto text-center fx-fade-up animation-delay-2 about-hero-content">
          <div>
            <div class="about-hero-logo">
              <img src="./assets/img/images/hero-logo.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-0 mt-lg-7 mb-lg-9 cform mb-7">

    <div class="container position-relative fx-fade-up animation-delay-3">
      <div class="bg-transparent row">
        <div class="col-lg-3 offset-lg-1">
            <p class="text-center mb-4">we can reach out to you</p>
            <form>
                <div class="mb-3">
                  <label class="form-label text-dark">
                    Name
                  </label>
                  <input type="text" class="form-control form-control-md">
                </div>
                <div class="mb-3">
                  <label class="form-label text-dark">
                    Email address
                  </label>
                  <input type="email" class="form-control form-control-md">
                </div>
                <div class="mb-3">
                  <label class="form-label text-dark">
                    Website
                  </label>
                  <input type="website" class="form-control form-control-md">
                </div>
                <div class="mb-3">
                  <label class="form-label text-dark">
                      how did you hear about us?
                  </label>
                  <input type="phone" class="form-control form-control-md">
                </div>
      
                <input type="submit" value="Submit" class="btn btn-block btn-primary btn-lg hover-lift-light mt-4">
              </form>
        </div>
        <div class="col-lg-3">
            <div class="contact-img">
                <img src="./assets/img/images/arrow-down.png" class="d-none d-lg-block" alt="">
                <img src="./assets/img/images/Group 8.png" class="d-block d-lg-none mx-auto mt-4" alt="">
                <div class="d-none d-lg-block text-center mt-3">OR</div>
            </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center">
            <a href="#" class="btn btn-block btn-primary btn-lg hover-lift-light mt-4 d-none d-lg-block">schedule a meeting with us</a>
            <a href="#" class="btn btn-block btn-secondary btn-lg hover-lift-light mt-4 d-block d-lg-none">schedule a meeting with us</a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer();