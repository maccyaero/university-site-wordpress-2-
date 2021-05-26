<?php get_header(); ?>
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">All Programs</h1>
      <div class="page-banner__intro">
        <p>See all our programs</p>
      </div>
    </div>  
  </div>
<div class="container container--narrow page-section">
  <?php while(have_posts()){ ?>
  <?php the_post(); ?>
  <ul class="link-list min-list">
  <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
  </ul>
  <?php }
  echo paginate_links();
  ?>
  </div>
<?php get_footer(); ?>