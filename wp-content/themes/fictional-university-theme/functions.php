<?php 

// The code to add all the stylesheets and javascript files 
function university_files(){
    
    wp_enqueue_script('main_university_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL,'1.0', true);
    wp_enqueue_style('font_awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom_google_fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('university_main_styles',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','university_files');

// The code to add custom dynamic browser tab title 

function university_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme','university_features');


function university_adjust_queries($query){ //When wordpress calls our function its going to give it acces to the wordpress query object. 
    if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){  //$query->is_main_query() is used to make sure that the query object is the wordpress query object and not osme custom object 
        
        $query->set('meta_key','event_date');
        $query->set('orderby','meta_value_num');
        $query->set('order','ASC');
        $query->set('meta_query',array(         //These 4 ROws 
            array(                      //are for telling wordpress
                'key'=>'event_date',      //to only show the events
                'compare'=>'>=',          //which are upcming and are in the future
                'value'=>$today,          //hence filter out the past events
                'type'=>'numeric'         //to show only upcoming events. 
                )
            ));
            
            
            
        }
        //Manipulate Program Archive Querry 
        if(!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()){  //$query->is_main_query() is used to make sure that the query object is the wordpress query object and not osme custom object 
            
            $query->set('orderby','title');
            $query->set('order','ASC');
            $query->set('posts_per_page',-1);
            
            
            
        }
    }
    
    add_action('pre_get_posts','university_adjust_queries');
    
    
    ?>
    
    