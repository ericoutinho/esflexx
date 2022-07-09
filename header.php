<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage esflexx
 * @since esflexx 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="<?=get_template_directory_uri()?>/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=get_template_directory_uri()?>/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=get_template_directory_uri()?>/assets/favicon-16x16.png">
    <link rel="manifest" href="<?=get_template_directory_uri()?>/assets/site.webmanifest">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/styles/main.css?v=<?=wp_get_theme()->get('Version')?>">
    <script src="<?=get_template_directory_uri()?>/scripts/main.js" defer></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class("js-body-hidden"); ?> >
    <?php wp_body_open(); ?>