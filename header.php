<?php /** * The Header for our theme. * * Displays all of the <head> section and everything up till
<div id="main">
* * @package WordPress * @subpackage Twenty_Ten * @since Twenty Ten 1.0 */ ?>
<!DOCTYPE html >
<html lang="ru" prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile# fb: http://ogp.me/ns/fb#">

<head >
    <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php wp_title("", true); ?>
    </title>
    
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KV3H4NB');</script>
    <!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV3H4NB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <div id="page">
        <div class="page_inner<?php if( !is_front_page() ) { ?> other<?php } ?>">
           
            