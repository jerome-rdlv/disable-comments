<?php

add_filter('comments_open', '__return_false');
add_filter('pings_open', '__return_false');
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
//    remove_submenu_page('options-general.php', 'options-discussion.php');
});
add_action('wp_before_admin_bar_render', function () {
    /** @var $wp_admin_bar WP_Admin_Bar */
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
});
add_action('admin_init', function () {

    // redirect if accessing comments page in admin
    global $currentPage;
    if (in_array($currentPage, array('edit-comments.php', 'options-discussion.php'))) {
        wp_redirect(admin_url());
        exit;
    }

    // remove comments metabox on dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // disable on all post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});
