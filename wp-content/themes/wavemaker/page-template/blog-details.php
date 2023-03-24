<?php

/**
 * 
 *  Template name: Blog-details
 * 
 * @package Wavemaker
 * 
 */
get_header();

$banner_section = get_field("banner");  
$proposal_section = get_field("proposal");

?>
<section class="pb-4 pb-lg-7 about-hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto text-center fx-fade-up animation-delay-2 about-hero-content">
        <div>
          <div class="about-hero-logo">
            <img src="<?php echo $banner_section["banner_image"] ?>" alt="" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mt-6">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <!-- Intro phrase -->
        <h1 class="blog-title"><?php the_title() ?></h1>
        <?php the_content() ?>
      </div>
    </div>
  </div>
</section>
<section class="related-blog-section mt-lg-9 mt-7">
  <div class="container">
    <div class="lead text-center mb-lg-7 mb-5">Related Posts</div>
    <div class="row justify-content-between">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'post__not_in' => array(get_the_ID()),
        'orderby' => 'rand',
      );

      $latest_blogs = get_posts($args);
      foreach ($latest_blogs as $blog) { ?>
        <div class="info-card">
          <a href="<?php echo get_permalink($blog->ID) ?>" class="text-dark">
            <div class="info-card-img"></div>
            <div class="info-card-desc">
              <p>
                <?php echo $blog->post_content ?>
              </p>
            </div>
            <div class="info-date"><?php echo $blog->post_date ?></div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
  </div>
</section>
<section class="mt-lg-9 section-podcast mb-7 mb-lg-0">
  <div class="container">
    <div class="text-center lead">
      <?php echo $proposal_section["heading"] ?>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 offset-lg-1 text-center d-md-block d-none">
        <img src="<?php echo $proposal_section["image"] ?>" class="img-fluid" alt="" />
      </div>

      <div class="col-md-6 offset-lg-1 text-center text-md-left">
        <p class="best-part-p-desc">
          <?php echo $proposal_section["description"] ?>
        </p>
        <div class="p-lead mt-5 mb-5">
          <?php echo $proposal_section["sub-description"] ?>
        </div>
        <?php if ($proposal_section["button"]["url"] != "" && $proposal_section["button"]["title"] != "") { ?>
          <a href="#" class="btn btn-primary btn-lg shadow-light hover-lift">
            <?php echo $proposal_section["button"]["title"] ?>
          </a>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
