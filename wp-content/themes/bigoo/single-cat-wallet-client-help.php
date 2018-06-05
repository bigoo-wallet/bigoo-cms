<?php
/**
 * The template for displaying single posts for the help center of the wallet app client.
 *
 * @since 1.0
 * @version 1.0
 */



get_header(); ?>
<div class="container client-help-center">
  <h1><?=$post->post_title?></h1>
  <h6 class="time"><?=$post->post_date?></h6>
  <div>
    <?=html($post->post_content)?>  
  </div>
</div>
<?php get_footer();
