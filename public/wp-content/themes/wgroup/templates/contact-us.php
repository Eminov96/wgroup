<?php
/**
 * Template Name: Contact-us Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage contact-us
 * @since Main 1.0
 */
?>
<head>
    <meta charset='utf-8'>
    <title>Contact Us | World Logistics Group</title>
    <meta name="description" content="World Logistics Group moves freight globally by air, ocean, and truck for the world's leading brands. Message us or contact right now." />
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://wlog-group.com/contact-us/" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact Us | World Logistics Group" />
    <meta property="og:description" content="World Logistics Group moves freight globally by air, ocean, and truck for the world's leading brands. Message us or contact right now." />
    <meta property="og:url" content="https://wlog-group.com/contact-us/" />
    <meta property="og:site_name" content="World Logistics Group" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="World Logistics Group moves freight globally by air, ocean, and truck for the world's leading brands. Message us or contact right now." />
    <meta name="twitter:title" content="Contact Us | World Logistics Group" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
<?php get_header(); ?>
<div class="content" role="main">
    <div class="contact-us">
        <div class="container">
            <div class="form-wrapper">
                <h1 class="contact-us_form-title"><?php the_cfc_field( 'contact_us_title','contact-us-form-title'); ?></h1>
                <p class="contact-us_form-description"><?php the_cfc_field( 'contact_us_title','contact-us-form-desc'); ?></p>
                <div class="contact-us_form">
                    <?php echo do_shortcode('[contact-form-7 id="185" title="Contact us"]'); ?>
                </div>
            </div>
            <div class="contacts">
                <div class="title-wrapper">
                    <img class="title-icon" src="<?php the_cfc_field( 'contact_us_contacts-title','contacts-title-icon'); ?>" alt="">
                    <h2 class="title"><?php the_cfc_field( 'contact_us_contacts-title','contacts-title'); ?></h2>
                </div>
                <ul class="bullets">
                    <?php foreach( get_cfc_meta( 'contact_us_bullets' ) as $key => $value ){?>
                        <div class="bullet">
                            <li><?php the_cfc_field( 'contact_us_bullets','contact-us-bullets-title', false, $key ); ?></li>
                            <input type="tel" name="myTel" placeholder="<?php the_cfc_field( 'contact_us_bullets','contact-us-bullets-phone', false, $key ); ?>">
                        </div>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
</body>
