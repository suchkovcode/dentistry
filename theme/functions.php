<?php
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10);
remove_action('wp_head', 'parent_post_rel_link', 10);
remove_action('wp_head', 'adjacent_posts_rel_link', 10);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'pagenavi_css');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_head', 'profile_link');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_filter('get_the_excerpt', 'wp_trim_excerpt', 10, 2);
remove_filter('the_excerpt', 'wptexturize');
remove_filter('the_excerpt', 'convert_smilies');
remove_filter('the_excerpt', 'convert_chars');
remove_filter('the_excerpt', 'wpautop');
remove_filter('the_excerpt', 'shortcode_unautop');
remove_filter('the_excerpt', 'wp_filter_content_tags');
remove_filter('the_excerpt', 'wp_replace_insecure_home_url');

add_filter('wp_robots', 'wp_robots_max_image_preview_large');
add_filter('show_admin_bar', '__return_false');
add_filter('nav_menu_css_class', '__return_empty_array');
add_filter('wpcf7_load_css', '__return_false');

add_filter('xmlrpc_methods', function ($methods) {
   unset($methods['pingback.ping']);
   unset($methods['pingback.extensions.getPingbacks']);
   return $methods;
});

add_filter('wp_headers', function ($headers) {
   unset($headers['X-Pingback']);
   return $headers;
});

add_filter('rest_authentication_errors', function ($result) {
   if (empty($result)) {
      if (!is_user_logged_in())
         return new WP_Error('rest_not_logged_in', 'You are not currently logged in.', array('status' => 401));
   }
   return $result;
});


add_action('after_setup_theme', function () {
   if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
   }
});

add_action('wp_head', function () {
?>
   <title><?php bloginfo('name'); ?> | <?php if (is_404()) {
                                          echo '404';
                                       };
                                       single_post_title(); ?></title>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
   <meta name="author" content="Nikita Suchkov">
   <meta name="website" content="https://github.com/suchkovcode">
   <meta name="mobile-web-app-capable" content="yes">
   <meta name="application-name" content="dentistry.com">
   <meta name="msapplication-TileColor" content="#fff">
   <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/static/mstile-144x144.png">
   <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/static/browserconfig.xml">
   <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/static/favicon.ico">
   <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/static/favicon-16x16.png">
   <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/static/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="48x48" href="<?php echo get_template_directory_uri(); ?>/assets/static/favicon-48x48.png">
   <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/static/manifest.webmanifest">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/anim.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/base.min.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/blocks.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/modules.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v8">
<?php
}, 0);

add_action('login_head', function () {
   printf('<link rel="icon" type="image/png" sizes="16x16" href="%s">', get_theme_file_uri('/assets/static/favicon-16x16.png'));
});

add_action('admin_head', function () {
   printf('<link rel="icon" type="image/png" sizes="16x16" href="%s">', get_theme_file_uri('/assets/static/favicon-16x16.png'));
});

add_action('wp_enqueue_scripts', function () {
   wp_deregister_script('jquery');
   wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.0.js', false, "3.7.0", true);
   wp_enqueue_script('base', get_template_directory_uri() . '/assets/js/base.min.js', false, "2.0.0", true);
   wp_enqueue_script('validate', get_template_directory_uri() . '/assets/js/validate.min.js', false, "2.0.0", true);
   wp_enqueue_script('sctipt', '/wp-content/themes/dentistry/app.min.js', array(), null, true);
   wp_dequeue_style('wp-block-library');
   wp_dequeue_style('wp-block-library-theme');
   wp_dequeue_style('cms-navigation-style-base');
   wp_dequeue_style('cms-navigation-style');
   wp_dequeue_style('wc-block-style');
   wp_dequeue_style('classic-theme-styles');
});


add_filter('post_row_actions', 'rd_duplicate_post_link', 10, 2);
add_filter('page_row_actions', 'rd_duplicate_post_link', 10, 2);
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_form_elements', function ($content) {
   $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
   return $content;
});

add_theme_support('post-thumbnails', array('post', 'page'));
add_theme_support('automatic-feed-links');
add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style']);


add_action('parse_query', function ($query) {
   if (is_date() || is_tag() ||  is_author() || is_category()) {
      global $wp_query;
      $wp_query->set_404();
      status_header(404);
      get_template_part(404);
      wp_redirect(get_template_part(404));
      exit;
   }
});



function rd_duplicate_post_link($actions, $post)
{
   if (current_user_can('edit_posts')) {
      $actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce') . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
   }
   return $actions;
}


if (!is_admin() && (!defined('DOING_AJAX') || (defined('DOING_AJAX') && !DOING_AJAX))) {
   ob_start('html5_slash_fixer');
   add_action('shutdown', 'html5_slash_fixer_flush');
}

function html5_slash_fixer($buffer)
{
   return str_replace(' />', '>', $buffer);
}



add_action('template_redirect', function () {
   ob_start(function ($buffer) {
      $buffer = str_replace(array('type="text/javascript"', "type='text/javascript'"), '', $buffer);
      $buffer = str_replace(array('type="text/css"', "type='text/css'"), '', $buffer);
      return $buffer;
   });
});
