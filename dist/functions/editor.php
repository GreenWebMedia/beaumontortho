<?php

/**
 * Remove wysiwyg editor for pages post types
 */
// add_action( 'init', 'remove_wysiwyg_editor' );
// function remove_wysiwyg_editor () {
//   remove_post_type_support( 'page', 'editor');
// }

/**
 * Hide the main editor on specific pages
 */
define('EDITOR_HIDE_PAGE_TITLES', json_encode(array('Our Practice')));
// define('EDITOR_HIDE_PAGE_TEMPLATES', json_encode(array('template-cars.php')));

/**
 * Hide the main editor on defined pages
 *
 * You can choose between page titles or page templates. Just set them
 * accordingly like this:
 *
 * define('EDITOR_HIDE_PAGE_TITLES', json_encode(array('Home', 'Some post archive', 'Some Listing')));
 * define('EDITOR_HIDE_PAGE_TEMPLATES', json_encode(array('template-of-something.php', 'archive-customposttype.php')));
 *
 *
 * @global string $pagenow
 * @return void
 */
 
function hide_editor() {
  global $pagenow;
    if(!('post.php' == $pagenow)){
    return;
  }

  // Get the Post ID.
  $post_id = filter_input(INPUT_GET, 'post') ? filter_input(INPUT_GET, 'post') : filter_input(INPUT_POST, 'post_ID');
  if(!isset($post_id)) {
    return;
  }

  // Hide the editor on the page titled 'Homepage'
  if(in_array(get_the_title($post_id), json_decode(EDITOR_HIDE_PAGE_TITLES))) {
    remove_post_type_support('page', 'editor');
  }

  // Hide the editor on a page with a specific page template
  $template_filename = get_post_meta($post_id, '_wp_page_template', true);

  if(in_array($template_filename, json_decode(EDITOR_HIDE_PAGE_TEMPLATES))) {
    remove_post_type_support('page', 'editor');
  }
}
add_action('admin_init', 'hide_editor');
