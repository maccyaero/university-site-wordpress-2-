<?php  

// Registering a new post type 
function university_post_types(){
    register_post_type('event',array(
        'public'=>true,    //This will make the post type viewable to admin and viewers 
        'labels'=>array(
            'name'=>'Events',
            'add_new_item'=>'Add New Events',
            'edit_item'=>'Edit Item', 
            'all_item'=>'All Events', 
            'singular_name'=>'Event'
        ),
        'menu_icon'=>'dashicons-calendar',
        'has_archive'=> true,
        'rewrite'=> array(
            'slug'=>'events'
        ), 
        'supports'=>array('excerpt','title','editor'),

    ));

    //Program Post Type 
    register_post_type('program',array(
        'public'=>true,    //This will make the post type viewable to admin and viewers 
        'labels'=>array(
            'name'=>'Programs',
            'add_new_item'=>'Add New Programs',
            'edit_item'=>'Edit Item', 
            'all_item'=>'All Programs', 
            'singular_name'=>'Program'
        ),
        'menu_icon'=>'dashicons-awards',
        'has_archive'=> true,
        'rewrite'=> array(
            'slug'=>'programs'
        ), 
        'supports'=>array('title','editor'),

    ));
}
add_action('init','university_post_types');

?>