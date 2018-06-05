<?php
/**
 * Coin2 functions and definitions
 *
 * @since 1.0
 */


/**
 * Get Template by Cate ID
 */
function set_cate_template( $single_template ){
  global $wp;

  $cats = get_the_category();

  foreach ($cats as $cat) {



    $parentSlugs = get_category_parents( $cat->term_id, false, ',', true);
  
    $slugs = explode(',', $parentSlugs);
    
    for ($i = count($slugs) - 1; $i >= 0; $i -- ) {
      if (empty($slugs[$i])) {
        continue;
      }
      $cat = get_category_by_slug($slugs[$i]);

      $s = locate_template("single-cat-{$cat->slug}.php");
      if (!empty($s)) {
        $single_template = $s;
        break;
      }
    }
  }

  return $single_template;
}
add_filter( 'single_template', 'set_cate_template' );

function html($string) {

  $string = preg_replace('/\n+/', '<p>', $string);

  return $string;
}

