<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="<?=get_template_directory_uri();?>/style.css">
    <?php wp_head(); ?>
</head>
<body>
    
    <header>
        <?php the_custom_logo(); ?>
        Blog
    </header>
    
    <?php
    wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
    ?>