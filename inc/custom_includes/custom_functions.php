<?php 

function custom_post_type_pagination($query, $post_type) {
	$posts_per_page = 6;

    if ( is_admin() || ! $query->is_main_query() ) {
        return;
    }
 
    if ( is_post_type_archive( $post_type ) ) {
        $query->set( 'posts_per_page', $posts_per_page );
    }

    
}

function runPosts($query){
	$post_types = array( '', '', '' );
    foreach ($post_types as $post_type) {
        custom_post_type_pagination($query, $post_type);
    }
}
 
add_action( 'pre_get_posts', 'runPosts' );

function custom_breadcrumbs() {
	global $post; 
    echo '<ul>';
    if (!is_home()) {
        echo '<li><a href="' . get_home_url() . '">Home</a></li>';

		// print_r(is_archive());
		// print_r(is_post_type_archive());

		if (is_archive()) {
			echo '<li>' . $post->post_type . 's</li>';
		}

        if (is_category() || is_single()) {
			$categories = get_the_category();
            if ($categories) {
				foreach($categories as $category) {
					echo '<li>' . get_category_parents($category, true, '</li><li>') . '</li>';
                }
            }
			if ($post) {
				// print_r($post->post_type);
				$post_type_custom = $post->post_type .'s';
				echo '<li><a href="' .  home_url($post_type_custom) . '">' .  $post_type_custom . '</a></li>';
				echo '<li>' . get_the_title() . '</li>';
			}
        } 
		
		if (is_page()) {
			if ($post->post_parent) {
				$ancestors = get_post_ancestors($post->ID);
                $ancestors = array_reverse($ancestors);
                foreach ($ancestors as $ancestor) {
                    echo '<li><a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                }
            }
			
            echo '<li>' . get_the_title() . '</li>';
        }

		if (is_404()) {
			echo '<li> 404 Not Found </li>';
		}
    }
    echo '</ul>';
}

function custom_queries($custom_posttype, $post_per_page, $section_location) {
    $args = array(
        'post_type' => $custom_posttype,
        'posts_per_page' => $post_per_page,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    
    $custom_query = new WP_Query( $args );
    
    if ( $custom_query->have_posts() ) :
        while ( $custom_query->have_posts() ) : $custom_query->the_post();
            // Your custom loop code here
            get_template_part('template-parts/sections/section', $section_location);
        endwhile;
    endif;
    
    wp_reset_postdata();
    
}

function custom_taxo($postID, $custom_posttype) {
    $terms = get_the_terms($postID, $custom_posttype);
    $term_names = array();
    foreach ($terms as $term) {
        $term_names[] = $term->name;
    }
    $term_names = join( ", ", $term_names );

    return $term_names;
}

function restrict_custom_post_type_access() {
    global $post;

    if ( ! is_user_logged_in() ) {   
        if ( is_singular( '' ) || is_post_type_archive( '' ) ) {
        
            wp_redirect( home_url( '/wp-login.php?/' ) );
            exit;
        }
    }

}
// add_action( 'template_redirect', 'restrict_custom_post_type_access' );

function custom_login_redirect( $redirect_to, $request, $user ) {
    // Redirect subscriber users to the homepage
    if ( isset( $user->roles ) && is_array( $user->roles ) && in_array( 'subscriber', $user->roles ) ) {
        $redirect_to = home_url('//');
    }
    return $redirect_to;
}
// add_filter( 'login_redirect', 'custom_login_redirect', 10, 3 );

function custom_login_logo() {
    echo '<style type="text/css">
        h1 a {
            background-image: url() !important;
            background-size: contain !important;
            height: 150px !important;
            width: 150px !important;
        }
    </style>';
}
add_action('login_head', 'custom_login_logo');

function add_custom_link_to_admin_bar() {
    global $wp_admin_bar;

    // Only show the link to logged in users.
    if ( ! is_user_logged_in() ) {
        return;
    }

    // Add a new link to the admin bar.
    $args = array(
        'id' => '',
        'title' => '',
        'href' => home_url('//'),
        'meta' => array(
            'class' => 'my-custom-class',
            'target' => '_blank',
            'rel' => 'noopener noreferrer',
        ),
    );
    $wp_admin_bar->add_node( $args );
}
// add_action( 'admin_bar_menu', 'add_custom_link_to_admin_bar', 999 );

