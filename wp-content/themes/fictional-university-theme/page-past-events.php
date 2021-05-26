<?php get_header(); ?>
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">Past Events</h1>
      <div class="page-banner__intro">
        <p>Recap of our past events</p>
      </div>
    </div>  
  </div>
<div class="container container--narrow page-section">

<?php 
     $today= date('Ymd');
     $pastEvents = new WP_Query(array(
        'paged' => get_query_var('paged',1), //Since we are working with a custom query and not the wordpress default querry we will have to jump through a few hoops in order to get the pagination working thats why we added this line of code which gets the word paged from url and if there is nothing than defaults it tot he first page more onfo refer section8/40 
        'posts_per_page'=> 1 ,       
       'post_type'=>'event', 
       'meta_key'=>'event_date',     //These 3 rows 
       'orderby'=>'meta_value_num',  //are for sorting the events 
       'order'=>'ASC',               //in ascending order of event date
       'meta_query'=> array(         //These 4 ROws 
         array(                      //are for telling wordpress
           'key'=>'event_date',      //to only show the events
           'compare'=>'<',          //which are upcming and are in the future
           'value'=>$today,          //hence filter out the past events
           'type'=>'numeric'         //to show only upcoming events. 
         )
       )

     ));
?>

  <?php while($pastEvents->have_posts()){ ?>
  <?php $pastEvents->the_post(); ?>
  <div class="event-summary">
  <a class="event-summary__date t-center" href="<?php echo the_permalink();?>">
              <span class="event-summary__month"><?php $eventDate = new DateTime(get_field('event_date')); echo $eventDate->format('M') ?></span>
              <span class="event-summary__day"><?php $eventDate = new DateTime(get_field('event_date')); echo $eventDate->format('d') ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></h5>
              <p><?php echo wp_trim_words(get_the_content(),18); ?><a href="<?php echo the_permalink();?>" class="nu gray">Learn more</a></p>
            </div>
            </div>
  <?php } 
  echo paginate_links(array(                //Since we are working with a custom query and not the wordpress default querry we will have to jump through a few hoops in order to get the pagination working thats why we added the arguments inside the paginate links function.
      'total'=>$pastEvents->max_num_pages
  ));
  ?>

  </div>
<?php get_footer(); ?>