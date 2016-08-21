<?php
/**
 * Plugin Name: Posts and CPT Select Field
 * Plugin URI: http://limecuda.com
 * Description: Helper function to build a select field of posts, pages, or any CPT as options
 * Version: 1.0.0
 * Author: Josh Mallard
 * Author URI: http://fewerthanthree.com
 * License: GPL-2.0+
 * Text Domain: lc_cpt_select_field
 */

// if this file is called directly, abort.
if( ! defined( 'WPINC' ) ) {
  die;
}

/**
 * Build the select field based on supplied parameters
 *
 * @since  1.0.0
 * @param  array    $post_type  post type(s) to pull for options
 * @param  string   $field      field id
 * @param  int      $value      the current or default value for this field]
 */
function lc_posts_as_options( $post_type = array(), $field = '', $value = '' ) {

  // If nothing specified, we'll get the posts
  if( 0 == $post_type ) {
      $post_type = 'post';
  }

  $args = array(
    'post_type'       => $post_type,
    'posts_per_page'  => 100,
    'no_found_rows'   => true
  );

  $args = apply_filters( 'lc_cpt_select_query_args', $args );
  $default_option_label = apply_filters( 'lc_cpt_default_option_' . $field, __( 'Select', 'lc_cpt_select_field' ) );

  $posts = new WP_Query( $args );

  if( $posts->have_posts() ) { ?>
    <select id="<?php echo $field; ?>" name="<?php echo $field; ?>">
      <option value=''><?php echo esc_attr( $default_option_label ); ?></option>
      <?php
        while( $posts->have_posts() ) {
          $posts->the_post(); ?>

            <option value="<?php echo get_the_ID() ?>" <?php echo selected( $value, get_the_ID() ); ?>><?php the_title(); ?></option>

        <?php
        }
      ?>
    </select>
  <?php
  }

}
