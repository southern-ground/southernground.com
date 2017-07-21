<?php
/* Template Name: The Shop
*/

get_header(); ?>

<script src="../wp-content/themes/SGHub/js/jquery-2.2.4.min.js"></script>

<div class="shop-top-hero">

    <?php echo do_shortcode('[supercarousel id=179]'); ?>

</div>

<div class="shop-container">

    <?php
    $args = array('posts_per_page' => 100, 'post_type' => 'sg_shop');
    $myposts = get_posts($args);
    $counter = 0;
    foreach ($myposts as $post) : setup_postdata($post); ?>

        <div class="item shop-item" data-url="<?php the_field('url'); ?>"
             onclick="openShopItem('<?php the_field('url'); ?>')">
            <div class="half_block cell">
                <img class="main_image" src="<?php the_field('image'); ?>"/>
            </div>
            <div class="shop-item-description">
                <img src="<?php the_field('logo'); ?>" class="shop-item-description-logo"/>
                <p class="full_text">
                    <?php the_field('text'); ?>
                </p>
            </div>
        </div>

    <?php endforeach;
    wp_reset_postdata(); ?>

</div>

<div class="separator-wrapper">
<span class="separator caps non-interactive">Seasonal Picks</span>
</div>

<div class="shop-bottom-hero">

    <?php echo do_shortcode('[supercarousel id=178]'); ?>

</div>

<?php get_footer('inner'); ?>


<script>
    function openShopItem(url) {
        window.open(url, "_blank");
    }

    $(window).bind('resize', function(e){
        if (window.RT) clearTimeout(window.RT);
        window.RT = setTimeout(function(){
            this.location.reload(false); /* false to get page from cache */
        }, 100);
    });

</script>
