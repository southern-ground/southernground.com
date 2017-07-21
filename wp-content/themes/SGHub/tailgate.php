<?php
/* Template Name: Tailgate
*/
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title><?php bloginfo('name'); ?></title>
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

    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500|Oswald:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() . '/css/tailgate.css' ?>"/>

    <meta property="og:image" content="<?= get_stylesheet_directory_uri() ?>/img/tailgate/tailgate-logo-for-social.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
</head>
<body>
<div id="tailgate">
    <header>
        <a href="http://zacbrownband.com">
            <img src="<?= get_stylesheet_directory_uri() ?>/img/tailgate/tailgate-header.png"/>
        </a>
        <a href="http://zacbrownband.com">
            <span class="header--title">Zac Brown Band</span>
        </a>
    </header>
    <div class="wrapper centered">
        <section>
            <img src="<?= get_stylesheet_directory_uri() ?>/img/tailgate/tailgate-logo.png"
                 class="tailgate__logo"
                 alt="Southern Ground Tailgate 2017"/>
        </section>
        <section class="tailgate__info">
            <h1 class="tailgate__title">
                Southern Ground is bringing the ultimate Tailgate party to Zac Brown Band's WELCOME HOME tour!
            </h1>
            <p class="tailgate__description">
                Join an afternoon of fun before the band takes the stage with live music, gourmet food and awesome
                giveaways. An event-exclusive t-shirt is included with each Tailgate ticket purchase!
            </p>
        </section>
        <section class="tailgate__video">

            <iframe width="560" height="315" src="https://www.youtube.com/embed/Onxu9XsyE-0" frameborder="0"
                    allowfullscreen></iframe>

        </section>
        <section class="bordered">
            <p class="tailgate__experience">The experience doesn't end with the music or food, as Tailgates offer unique
                opportunities to shop the
                Southern Ground lifestyle brands, in support of Zac's passion project, <a
                        href="http://campsouthernground.com" target="_blank">Camp Southern Ground</a>.
            </p>
        </section>
        <section class="narrow narrow--bordered">
            <img src="<?= get_stylesheet_directory_uri() ?>/img/tailgate/tailgate-logo.png"
                 class="tailgate__logo--small"
                 alt="Southern Ground Tailgate 2017"/>
            <p class="tailgate__details">2pm &ndash; 6pm Local Time &bull; Rain or Shine &bull; All Tickets Include
                T-Shirt</p>
        </section>
        <!-- Tickets Sections -->
        <section class="narrow narrow--bordered venue">
            <p class="venue__title">
                Alpharetta, GA &ndash; Verizon Wireless Amphitheatre at Encore Park
            </p>
            <p class="venue__date">
                Friday, May 12th & Saturday, May 13th
            </p>
            <p class="venue__tickets">
                1-Day Pass: $25 &bull; 2-Day Pass: $40
            </p>
            <a href="https://www.universe.com/events/southern-ground-tailgate-alpharetta-ga-tickets-RVSJP3"
               class="venue__cta"
               target="_blank"
               title="Tickets for the Alpharetta Tailgate">
                TICKETS: AlpharettA, GA
            </a>
        </section>
        <section class="narrow narrow--bordered venue">
            <p class="venue__title">
                Gilford, NH &ndash; Bank of New Hampshire Pavilion
            </p>
            <p class="venue__date">
                Friday, May 26th &bull; Saturday, May 27th &bull; Sunday, May 28th• Monday, May 29th
            </p>
            <p class="venue__tickets">
                1-Day Pass: $25 &bull; 2-Day Pass: $40 &bull; 3-Day Pass: $55 &bull; 4-Day Pass: $60
            </p>
            <a href="https://www.universe.com/events/southern-ground-tailgate-gilford-nh-tickets-H17M2Y"
               class="venue__cta"
               target="_blank"
               title="Tickets for the Gilford Tailgate">
                TICKETS: Gilford, NH
            </a>
        </section>
        <section class="narrow narrow--bordered venue">
            <p class="venue__title">
                Holmdel, NJ &ndash; PNC Bank Arts Center
            </p>
            <p class="venue__date">
                Friday, July 7TH &bull; Saturday, July 8th
            </p>
            <p class="venue__tickets">
                1-Day Pass: $25 &bull; 2-Day Pass: $40
            </p>
            <a href="https://www.universe.com/events/southern-ground-tailgate-holmdel-nj-tickets-FH7TKN"
               class="venue__cta"
               target="_blank"
               title="Tickets for the Holmdel Tailgate">
                TICKETS: Holmdel, NJ
            </a>
        </section>
        <section class="narrow narrow--bordered venue">
            <p class="venue__title">
                West Palm Beach, FL &ndash; Perfect Vodka Amphitheatre
            </p>
            <p class="venue__date">
                Friday, September 22nd &bull; Saturday, September 23rd
            </p>
            <p class="venue__tickets">
                1-Day Pass: $25 &bull; 2-Day Pass: $40
            </p>
            <a href="https://www.universe.com/events/southern-ground-tailgate-west-palm-beach-fl-tickets-YZMTJ8"
               class="venue__cta"
               target="_blank"
               title="Tickets for the West Palm Tailgate">
                TICKETS: West Palm Beach, FL
            </a>
        </section>
        <!-- END Tickets Sections -->
        <section class="bordered">
            <p class="tailgate__extras">
                Kids age 10 & under are FREE! <br/>
                Day-of-show, ticket prices increase by $5. <br/>
                Food + adult beverages will be available for purchase. <br/>
                The pre-sale purchase limit of 4 tickets does NOT apply to the Tailgate.
            </p>
        </section>
        <section class="two-column bordered">

            <a href="https://zamily.zacbrownband.com/"
               target="_blank"
               title="Join Zamily"
               class="zamily__image__link"
            >
                <img src="<?= get_stylesheet_directory_uri() ?>/img/tailgate/tailgate-zamily-logo.png"
                     class="zamily__image"
                     alt="Zac Brown Band Zamily V.I.Z. (very important Zamily) Tailgating Perks"/>
            </a>
            <p class="zamily__description">
                Members of Zac Brown Band’s fan club have exclusive access to the V.I.Z. lounge, as well as exclusive prizes, including backstage passes and autographed swag! Present your Zamily credentials to access the V.I.Z. lounge and pick up a commemorative event pin. Not yet a Zamily member? <span class="nobr"><a
                        href="https://zamily.zacbrownband.com/"
                        target="_blank"
                        title="Join Zamily">Join now</a>!</span>
            </p>

        </section>
        <section>
            <img src="<?= get_stylesheet_directory_uri() ?>/img/tailgate/tailgate-bottom.png"
                 class="tailgate__bottom-image"
                 alt="Come one, come all! Music, food and fun await!"/>
        </section>
    </div>
</div>
<footer>
    <div>
        &copy;<?= date("Y") ?> Southern Ground
    </div>
    <div class="xs--hidden">&nbsp;&bull;&nbsp;</div>
    <div class="footer__link">
        <a href="mailto:info@southernground.net">
            info@southernground.net
        </a>
    </div>
</footer>

