<?php // Function for creating Widgets
function create_widget($name, $id, $description) {
    register_sidebar(array(
        'name' => __( $name ),
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div id="'.$id.'" class="widget %1$s %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

// Create the actual widgets
create_widget("Page Sidebar", "page-widget", "This is a widget for pages");
create_widget("Post Sidebar", "post-widget", "This is a widget for post");
