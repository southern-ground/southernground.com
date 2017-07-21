<?php
/* Template Name: Home
*/

get_header(); ?>

<div class="row hero">
  <div class="col-sm-5 intro_img">
    <img class="pull-right" src="<?php the_field('hero_img'); ?>" />
  </div>
  <div class="col-sm-6 intro_text">
    <?php the_field('hero_text'); ?>
  </div>
</div>

<div>
  <div class="half_block only_mobile">
    <img src="<?php the_field('the_music_img'); ?>" />
  </div><div class="half_block">
    <a href="<?php echo get_permalink( get_page_by_title( 'The Music' )->ID ); ?>">
      <img src="<?php the_field('the_music_link'); ?>" />
    </a>
  </div><div class="half_block non_mobile">
    <img src="<?php the_field('the_music_img'); ?>" />
  </div>
</div>
<div>
  <div class="half_block">
    <img src="<?php the_field('the_food_img'); ?>" />
  </div><div class="half_block">
    <a href="<?php echo get_permalink( get_page_by_title( 'The Food' )->ID ); ?>">
      <img src="<?php the_field('the_food_link'); ?>" />
    </a>
  </div>
</div>
<div>
  <div class="half_block only_mobile">
    <img src="<?php the_field('the_craft_img'); ?>" />
  </div><div class="half_block">
    <a href="<?php echo get_permalink( get_page_by_title( 'The Craft' )->ID ); ?>">
      <img src="<?php the_field('the_craft_link'); ?>" />
    </a>
  </div><div class="half_block non_mobile">
    <img src="<?php the_field('the_craft_img'); ?>" />
  </div>
</div>
<div>
  <div class="half_block">
    <img src="<?php the_field('the_cause_img'); ?>" />
  </div><div class="half_block">
    <a href="http://campsouthernground.com" target="_blank">
      <img src="<?php the_field('the_cause_link'); ?>" />
    </a>
  </div>
</div>
<?php get_footer(); ?>
