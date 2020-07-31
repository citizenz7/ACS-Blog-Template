<?php
/**
 * The template for displaying header
 *
 * @link Github
 *
 * @package WordPress
 * @subpackage Acs-Blog-Template
 * @since Acs-Blog-Template 1.0
 * @version 1.0
 */
 ?>
 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>

 <head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

   <meta name="robots" content="index, follow">
   <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
	 <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

   <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
   <meta name="author" content="Collectif OlWaRoYo : Olivier, Warenn, Robin, Yoann">
   <meta name="description" content="Blog de la promo 41 - Access Code School de Nevers">
   <meta name="keywords" content="access,code,school,nevers,nievre,développeur,développement,web,computer,windows,linux,apache,nginx,mysql,sql,php,phpmyadmin,adminer,wordpress,blog,css,html,sass,less,formation,professionnel,titre,diplome">

   <meta property="og:locale" content="fr_FR">
   <meta property="og:type" content="website">
 	 <meta property="og:title" content="Blog de la promotion 41 - Un site utilisant WordPress">
   <meta property="og:description" content="Un site utilisant WordPress">
 	 <meta property="og:url" content="https://promo-41.codeur.online/blog/">
 	 <meta property="og:site_name" content="Blog de la promotion 41">
 	 <meta name="twitter:card" content="summary_large_image">
   <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://promo-41.codeur.online/blog/#website","url":"https://promo-41.codeur.online/blog/","name":"Blog de la promotion 41","description":"Un site utilisant WordPress","potentialAction":[{"@type":"SearchAction","target":"https://promo-41.codeur.online/blog/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"fr-FR"},{"@type":"CollectionPage","@id":"http://promo-41.codeur.online/blog/#webpage","url":"http://promo-41.codeur.online/blog/","name":"Blog de la promotion 41 - Un site utilisant WordPress","isPartOf":{"@id":"https://promo-41.codeur.online/blog/#website"},"description":"Un site utilisant WordPress","inLanguage":"fr-FR"}]}</script>
   <link rel='dns-prefetch' href='//s.w.org'>

   <link rel="alternate" type="application/rss+xml" title="Blog de la promotion 41 &raquo; Flux" href="https://promo-41.codeur.online/blog/index.php/feed/">
   <link rel="alternate" type="application/rss+xml" title="Blog de la promotion 41 &raquo; Flux des commentaires" href="https://promo-41.codeur.online/blog/index.php/comments/feed/">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

   <link rel="apple-touch-icon" sizes="57x57" href="./img/assets/apple-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="60x60" href="./img/assets/apple-icon-60x60.png">
   <link rel="apple-touch-icon" sizes="72x72" href="./img/assets/apple-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="76x76" href="./img/assets/apple-icon-76x76.png">
   <link rel="apple-touch-icon" sizes="114x114" href="./img/assets/apple-icon-114x114.png">
   <link rel="apple-touch-icon" sizes="120x120" href="./img/assets/apple-icon-120x120.png">
   <link rel="apple-touch-icon" sizes="144x144" href="./img/assets/apple-icon-144x144.png">
   <link rel="apple-touch-icon" sizes="152x152" href="./img/assets/apple-icon-152x152.png">
   <link rel="apple-touch-icon" sizes="180x180" href="./img/assets/apple-icon-180x180.png">
   <link rel="icon" type="image/png" sizes="192x192" href="./img/assets/android-icon-192x192.png">
   <link rel="icon" type="image/png" sizes="32x32" href="./img/assets/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="96x96" href="./img/assets/favicon-96x96.png">
   <link rel="icon" type="image/png" sizes="16x16" href="./img/assets/favicon-16x16.png">
   <link rel="manifest" href="./img/assets/manifest.json">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="msapplication-TileImage" content="./img/assets/ms-icon-144x144.png">
   <meta name="theme-color" content="#ffffff">
   <meta name="mobile-web-app-capable" content="yes">

   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

   <?php wp_head(); ?>

 </head>

 <body <?php body_class(); ?>>

 <?php wp_body_open(); ?>
