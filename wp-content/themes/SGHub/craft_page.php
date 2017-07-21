<?php
/* Template Name: The Craft
*/

get_header(); ?>

<img class="hero_image" src="<?php echo get_field('header_img'); ?>"/>

<?php
  $args = array( 'posts_per_page' => 100,'post_type' => 'sg_craft' );
  $myposts = get_posts( $args );
  $counter = 0;
  foreach( $myposts as $post ) : setup_postdata( $post ); ?>
  <div class="item">

    <?php if( $counter % 2 == 0) { ?>
      <div class="half_block cell">
        <img class="main_image" src="<?php the_field( 'image' ); ?>" />
      </div>
    <?php } else { ?>
      <div class="half_block cell only_mobile">
        <img class="main_image" src="<?php the_field( 'image' ); ?>" />
      </div>
    <?php } ?>

    <div class="item_text half_block cell">
      <p>
        <?php if( get_field( 'url' ) ) { ?>
          <a target="_blank" class="main_logo" href="<?php the_field( 'url' ); ?>">
            <img src="<?php the_field( 'logo' ); ?>" />
          </a>
        <?php } else { ?>
          <div class="main_logo">
            <img src="<?php the_field( 'logo' ); ?>" />
          </div>
        <?php } ?>
      </p>
      <p class="divider">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/divider.png"/>
      </p>
      <p class="full_text">
        <?php the_field( 'text' ); ?>
      </p>

      <?php if( get_field( 'multiple_links' ) ) { ?>
        <?php if( get_field( 'links' ) ) : ?>
        	<?php while( has_sub_field( 'links' ) ) : ?>
            <a target="_blank" class="logo_link" href="<?php the_sub_field( 'link_url' ); ?>">
              <img src="<?php the_sub_field( 'link_logo' ); ?>"/>
            </a>
        	<?php endwhile; ?>
        <?php endif; ?>
      <?php } else { ?>
        <?php if( get_field( 'url' ) ) { ?>
          <a target="_blank" class="link" href="<?php the_field( 'url' ) ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow.png"/>
          </a>
        <?php } ?>
      <?php } ?>
    </div>

    <?php if( $counter % 2 == 1) { ?>
      <div class="half_block cell non_mobile">
        <img class="main_image" src="<?php the_field( 'image' ); ?>" />
      </div>
    <?php } ?>
  </div>
<?php $counter = $counter + 1; ?>
<?php endforeach;
wp_reset_postdata();?>

<?php get_footer('inner'); ?>