<?php
function theme_enqueue_scripts() {
    //JS
    wp_register_script('owl-carousel-js', get_template_directory_uri() . '-Child-Theme/assets/js/owl.carousel.min.js', array(), '1.0', true);
    wp_register_script('snap-scroll-js', get_template_directory_uri() . '-Child-Theme/assets/js/snap-scroll.min.js', array(), '1.0', true);
	wp_register_script('custom-js', get_template_directory_uri() . '-Child-Theme/assets/js/custom.js', array(), '1.0', true);

	wp_enqueue_script('owl-carousel-js');
	//wp_enqueue_script('snap-scroll-js');
	wp_enqueue_script('custom-js');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', 'all' );	
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

function delete_all_between($beginning, $end, $string) {
	$beginningPos = strpos($string, $beginning);
	$endPos = strpos($string, $end);
	
	if ($beginningPos === false || $endPos === false)
		return $string;
	

	$textToDelete = substr($string, $beginningPos, ($endPos + strlen($end)) - $beginningPos);

	return delete_all_between($beginning, $end, str_replace($textToDelete, '', $string));
}

add_image_size('project-thumbnail', 430, 370, array('center', 'center'));


/**CREATE PROJECTS POST TYPE
add_action('init', 'create_custom_post_type_project');
add_filter('post_updated_messages', 'custom_post_type_messages_project');
add_action('admin_head', 'custom_post_type_help_project');
function create_custom_post_type_project(){
	$labels = array(
		'name'               => 'Projects',
		'singular_name'      => 'Project',
		'menu_name'          => 'Projects',
		'name_admin_bar'     => 'Projects',
		'add_new'            => 'Add Project',
		'add_new_item'       => 'Add New Project',
		'new_item'           => 'New Project',
		'edit_item'          => 'Edit Project',
		'view_item'          => 'View Project',
		'all_items'          => 'All Projects',
		'search_items'       => 'Search Projects',
		'parent_item_colon'  => 'Parent Project:',
		'not_found'          => 'No Project found.',
		'not_found_in_trash' => 'No Project found in Trash.'
	);

	$args = array( 
		'labels'		=> $labels,
		'public'		=> true,
		'query_var'		=> 'Project',
		'rewrite'		=> array('slug' => 'project'),
		'show_ui' 		=> true,
		'has_archive'   => false,
		'menu_icon'     => 'dashicons-category',
		//'taxonomies'	=> array( 'category' ),
		'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', 'comments' )
	);
	register_post_type('Project', $args);
}

function custom_post_type_messages_project($messages){
	$post = get_post();
	$messages['Project'] = array(
		0  => '',
		1  => 'Project updated.',
		2  => 'Custom field updated.',
		3  => 'Custom field deleted.',
		4  => 'Recipe updated.',
		5  => isset($_GET['revision']) ? sprintf( 'Project restored to revision from %s',wp_post_revision_title((int) $_GET['revision'], false)) : false,
		6  => 'Project published.',
		7  => 'Project saved.',
		8  => 'Project submitted.',
		9  => sprintf(
			'Project scheduled for: <strong>%1$s</strong>.',
			date_i18n( 'M j, Y @ G:i', strtotime($post->post_date))
		),
		10 => 'Project draft updated.'
	);
	return $messages;
}

function custom_post_type_help_project(){
	$screen = get_current_screen();
	if ('Project' != $screen->post_type) {
		return;
	}

	$basics = array(
		'id'      => 'Project_basics',
		'title'   => 'Project Basics',
		'content' => 'Content for help tab here'
	);

	$formatting = array(
		'id'      => 'Project_formatting',
		'title'   => 'Project Formatting',
		'content' => 'Content for help tab here'
	);

	$screen->add_help_tab($basics);
	$screen->add_help_tab($formatting);
}

if(function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Announcement',
	    'menu_slug'  => 'announcement-settings',
	    'icon_url'   => 'dashicons-megaphone',
	));
} */

// Change the Load More Posts Text
function my_load_more_posts_name( $load_more_posts ) {
	$load_more_posts = "Load more case studies";
	return $load_more_posts;
   }
   add_filter( 'avada_load_more_posts_name', 'my_load_more_posts_name' );