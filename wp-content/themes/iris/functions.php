<?php
require_once('includes/theme-class.php');
function construc_widgets_init() {
    register_sidebar(array(
        'name' => __('sidebar', 'angocit'),
        'id' => 'sidebar',
        'description' => __('Sidebar', 'angocit'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title"><span>',
        'after_title' => '</span></h2>',
    ));
    register_sidebar(array(
        'name' => __('Banner home trái', 'angocit'),
        'id' => 'bhleft',
        'description' => __('Banner', 'angocit'),
        'before_widget' => '<div class="widget hover">',
        'after_widget' => '<div class="hover_collection"></div></div>',
        'before_title' => '<h2 class="font-berling text-2xl lg:text-[36px] text-[#1f1f1f] italic text-center leading-none">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Banner home phải', 'angocit'),
        'id' => 'bhright',
        'description' => __('Banner', 'angocit'),
        'before_widget' => '<div class="widget hover">',
        'after_widget' => '<div class="hover_collection"></div></div>',
        'before_title' => '<h2 class="font-berling text-2xl lg:text-[36px] text-[#1f1f1f] italic text-center leading-none">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Xu hướng trái', 'angocit'),
        'id' => 'xhleft',
        'description' => __('Banner', 'angocit'),
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="font-berling text-2xl lg:text-[36px] text-[#1f1f1f] italic text-center leading-none">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Box Xu hướng giữa', 'angocit'),
        'id' => 'xhmid',
        'description' => __('Banner', 'angocit'),
        'before_widget' => '<div class="widget hover">',
        'after_widget' => '<div class="hover_collection"></div></div>',
        'before_title' => '<h2 class="font-berling text-2xl lg:text-[36px] text-[#1f1f1f] italic text-center leading-none">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Xu hướng phải', 'angocit'),
        'id' => 'xhright',
        'description' => __('Banner', 'angocit'),
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="font-berling text-2xl lg:text-[36px] text-[#1f1f1f] italic text-center leading-none">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Box Báo chí', 'angocit'),
        'id' => 'baochi',
        'description' => __('Banner', 'angocit'),
        'before_widget' => '<div class="projects-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="font-berling text-2xl lg:text-[36px] text-[#1f1f1f] italic text-center leading-none">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Instagram', 'angocit'),
        'id' => 'instagram',
        'description' => __('Banner', 'angocit'),
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="font-berling text-2xl lg:text-[36px] text-[#1f1f1f] italic text-center leading-none">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Filter', 'angocit'),
        'id' => 'filter',
        'description' => __('Banner', 'angocit'),
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="font-berling text-2xl lg:text-[36px] text-[#1f1f1f] italic text-center leading-none">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer1', 'angocit'),
        'id' => 'footer1',
        'description' => __('Footer1', 'angocit'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer2', 'angocit'),
        'id' => 'footer2',
        'description' => __('Footer', 'angocit'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer3', 'angocit'),
        'id' => 'footer3',
        'description' => __('Footer3', 'angocit'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer4', 'angocit'),
        'id' => 'footer4',
        'description' => __('Footer4', 'angocit'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer5', 'angocit'),
        'id' => 'footer5',
        'description' => __('Footer5', 'angocit'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
if (function_exists('register_nav_menus')) {
        register_nav_menus(
                array(
                    'main-menu' => 'Menu'
                )
        );
    }
add_action('widgets_init', 'construc_widgets_init');
add_theme_support('post-thumbnails');
add_theme_support('woocommerce');
add_filter('widget_text','do_shortcode');

function the_content_limit($max_char, $more_link_text = '', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content = strip_tags($content);
    if (isset($_GET['p'])&&strlen($_GET['p']) > 0) {
        echo "";
        echo $content;
        echo "";
    } else if ((strlen($content) > $max_char) && ($espacio = strpos($content, " ", $max_char))) {
        $content = substr($content, 0, $espacio);
        $content = $content;
        echo "";
        echo $content;
        echo "...";
        echo "&nbsp;<a href='";
        the_permalink();
        echo "'>" . "</a>";
        echo "";
    } else {
        echo "";
        echo $content;
        echo "";
    }
}

function page_nav() {

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (( $paged + 2 ) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>';

    /** Previous Post Link */
    if (get_previous_posts_link())
        printf('<li>%s</li>', get_previous_posts_link());

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li%s><a href="%s">%s</a></li>', $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>', $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>';

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>', $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li>%s</li>', get_next_posts_link());

    echo '</ul></div>';
}
function page_nav2($wp_query) {

    // if (is_singular())
    //     return;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (( $paged + 2 ) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>';

    /** Previous Post Link */
    if (get_previous_posts_link())
        printf('<li>%s</li>', get_previous_posts_link());

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li%s><a href="%s">%s</a></li>', $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>', $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>';

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>', $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li>%s</li>', get_next_posts_link());

    echo '</ul></div>';
}
function create_posttype_custom()
{
    register_post_type(
        'duan',
        array(
            'labels' => array(
                'name' => __('Dự án'),
                'singular_name' => __('Dự án'),
            ),
            'supports' => array(
                'title',
                'editor',
                'author',
                'thumbnail'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-block-default',
            'rewrite' => array('slug' => 'duan'),
            'show_in_rest' => true,

        )
    );
}
function duan_taxonomy()
{
    register_taxonomy(
        'danhmuc-duan',
        'duan',
        array(
            'hierarchical' => true,
            'label' => 'Danh mục dự án',
            'query_var' => true,
            'show_in_nav_menus' => true,
            'rewrite' => array(
                'slug' => 'danhmuc-duan',
                'with_front' => false
            )
        )
    );
}
add_action('init','create_posttype_custom');
add_action('init','duan_taxonomy');
new THEME_CLASS();
include('theme-option.php');
include('includes/widget.php');