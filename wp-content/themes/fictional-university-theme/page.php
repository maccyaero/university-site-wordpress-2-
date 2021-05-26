<?php get_header(); ?>

<?php 

while(have_posts()){
    the_post();
        
    ?>
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Place text here </p>
      </div>
    </div>  
  </div>

<!-- This code is to show the bread crumb trail only if on a childpage  -->
<?php 
  $parent_page_id = wp_get_post_parent_id(get_the_id());
  if($parent_page_id){

?>

<div class="container container--narrow page-section">

<div class="metabox metabox--position-up metabox--with-home-link">
  <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($parent_page_id); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parent_page_id);?></a> <span class="metabox__main"><?php echo the_title(); ?></span></p>
</div>

<?php
  }
?>

  
<?php 

// code to find out if the page is a parent, by seeing whether it has any childs
$has_children = get_pages(array(
    'child_of' => get_the_ID()
));
// if either the page is a parent or is a child of a parent then show the menu, 
//otherwise if either of the two variables is 0 meaning false then dont how the menu
if($parent_page_id or $has_children){ ?>

   <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($parent_page_id); ?>"> <?php echo get_the_title($parent_page_id); ?></a></h2>
      <ul class="min-list">

        <?php 
            // If its the parent then gets the parent id 
            if ($parent_page_id){
                
                $page_id = $parent_page_id;
             }else{ //Get the parents id
                $page_id = get_the_id();
            }

            wp_list_pages(array(
                'title_li' => NULL,
                'child_of' => $page_id

            ));
        ?>
      </ul>
    </div> 
<?php } ?>
    <div class="generic-content">
    <?php the_content(); ?>
    </div>

  </div>
<?php  
    }
?>
<?php get_footer(); ?>