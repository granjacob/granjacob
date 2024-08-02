<?php

global $uri;
global $pathBaseContent;


// Query for the page by its slug
$page = get_page_by_path( $uri );


if ($page) {

    global $wp_query;
    $wp_query->set('page_id', $page->ID);
    $wp_query->is_page = true;
    $wp_query->is_singular = true;

    ?>
    <div class="container text-start">
        <?php
        echo '<h1>' . esc_html(get_the_title($page)) . '</h1>';
        echo apply_filters('the_content', $page->post_content);
        ?>
    </div>


    <?php

}

else {
    include( "404.php" );
}

?>