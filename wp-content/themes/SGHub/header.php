<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,600,700|Montserrat:400,700' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>

    <!-- Bootstrap -->

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-54746522-5', 'auto');
        ga('send', 'pageview');

    </script>
    <?php wp_head(); ?>

    <meta name="google-site-verification" content="IKfMVL3QNqwzitWj_RVPugqfatbH1PqyaNT7aVZsrw4"/>

    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Event",
  "name": "Take the Tour",
  "description": "Tour the facilities.",
  "startDate" : "2017-01-5T09:00",
  "url" : "http://southernground.com",
  "image": "http://new.southernground.com/wp-content/uploads/2016/11/Screen-Shot-2016-11-15-at-4.56.16-PM.png",
  "location" : {
    "@type" : "Place",
    "sameAs" : "http://southernground.com",
    "name" : "Zac Brown's Southern Ground",
    "address" : "101 Gardner Park, Peachtree City, GA 30269"
  }
}
    </script>

</head>
<body>
<header>

    <div class="social-wrapper">
        <div class="social">
            <a href="https://www.facebook.com/ZBSouthernGround/" class="social-link facebook"
               target="_blank">Facebook</a>
            <a href="https://www.instagram.com/zbsouthernground/" class="social-link instagram" target="_blank">Instagram</a>
            <a href="https://twitter.com/southernground" class="social-link twitter" target="_blank">Twitter</a>
        </div>
        <div class="tour">
            <a class="tour"
               href="https://www.universe.com/events/zac-browns-southern-ground-headquarters-tour-tickets-3WST59"
               target="_blank">
                Take the Tour
            </a>
        </div>
    </div>

    <a href="/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"/>
    </a>
    <p>
        <?php echo get_post_meta(get_page_by_title('Home')->ID, "tagline", true); ?>
    </p>

</header>

<nav>
    <?php $page_title = get_the_title(); ?>
    <a href="<?php echo get_permalink(get_page_by_title('The Music')->ID); ?>">
        <?php if ($page_title == 'The Music') { ?>
            <img class="nav_arrow reverse" src="<?php echo get_stylesheet_directory_uri(); ?>/img/main_nav_arrow.png"/>
        <?php } ?>
        THE MUSIC
        <?php if ($page_title == 'The Music') { ?>
            <img class="nav_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/main_nav_arrow.png"/>
        <?php } ?>
    </a>
    <a href="<?php echo get_permalink(get_page_by_title('The Food')->ID); ?>">
        <?php if ($page_title == 'The Food') { ?>
            <img class="nav_arrow reverse" src="<?php echo get_stylesheet_directory_uri(); ?>/img/main_nav_arrow.png"/>
        <?php } ?>
        THE FOOD
        <?php if ($page_title == 'The Food') { ?>
            <img class="nav_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/main_nav_arrow.png"/>
        <?php } ?>
    </a>
    <a href="<?php echo get_permalink(get_page_by_title('The Craft')->ID); ?>">
        <?php if ($page_title == 'The Craft') { ?>
            <img class="nav_arrow reverse" src="<?php echo get_stylesheet_directory_uri(); ?>/img/main_nav_arrow.png"/>
        <?php } ?>
        THE CRAFT
        <?php if ($page_title == 'The Craft') { ?>
            <img class="nav_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/main_nav_arrow.png"/>
        <?php } ?>
    </a>
    <a href="http://campsouthernground.com" target="_blank">THE CAUSE</a>
    <a href="<?php echo get_permalink(get_page_by_title('Shop')->ID); ?>">
        <?php if ($page_title == 'Shop') { ?>
            <img class="nav_arrow reverse" src="<?php echo get_stylesheet_directory_uri(); ?>/img/main_nav_arrow.png"/>
        <?php } ?>
        SHOP
        <?php if ($page_title == 'Shop') { ?>
            <img class="nav_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/main_nav_arrow.png"/>
        <?php } ?>
    </a>
    <a
            class="tour"
            href="https://www.universe.com/events/zac-browns-southern-ground-headquarters-tour-tickets-3WST59"
            target="_blank">THE TOUR</a>
</nav>

<div id="main">



