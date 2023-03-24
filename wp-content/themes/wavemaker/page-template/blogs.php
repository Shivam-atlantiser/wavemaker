<?php

/**
 * 
 * Template name: Blogs
 * 
 * @package Wavemaker
 * 
 */
get_header();

$banner_section = get_field("banner");
$proposal_section = get_field("proposal");

?>
<section class="pb-8 pb-lg-9 about-hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto text-center fx-fade-up animation-delay-2 about-hero-content">
        <div>
          <div class="about-hero-logo">
            <img src="<?php echo $banner_section["banner_image"] ?>" alt="" class="img-fluid" />
          </div>
          <div class="lead">
            <?php echo $banner_section["heading"] ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="info-grid-section">
  <div class="container">
    <div class="row justify-content-between">
      <?php
      $args = array("posts_per_page" => "-1", "post_status" => "publish", "post_type" => "post");
      $the_query = new WP_Query($args); ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="info-card">
            <a href="<?php echo get_permalink() ?>">
              <div class="info-card-img"><?php echo get_the_post_thumbnail() ?></div>
              <div class="info-card-desc text-dark">
                <p>
                  <?php the_excerpt() ?>
                </p>
              </div>
              <div class="info-date text-dark"><?php the_date() ?></div>
            </a>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
  <?php if ($banner_section["button"]["url"] != "" && $banner_section["button"]["title"] != "") { ?>
    <a href="" class="btn btn-secondary btn-lg shadow-light hover-lift btn-next">
      <?php echo $banner_section["button"]["title"] ?>
    </a>
  <?php } ?>
  </div>
</section>
<section class="mt-lg-9 mt-7 mb-7 mb-md-0">
  <div class="container">
    <div class="text-center lead">
      <?php echo $proposal_section["title"] ?>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 offset-lg-1 text-center">
        <img src="<?php echo $proposal_section["proposal_image"] ?>" class="img-fluid" alt="" />
      </div>

      <div class="col-md-6 offset-lg-1 text-center text-md-left">
        <p class="best-part-p-desc">
          <?php echo $proposal_section["description"] ?>
        </p>
        <div class="p-lead mt-5 mb-5">
          <?php echo $proposal_section["sub-title"] ?>
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
