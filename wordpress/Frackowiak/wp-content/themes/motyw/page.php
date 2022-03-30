<?php
get_header();
?>

<main>
    
    <h1><?php the_title(); ?></h1>

    <section class="strona">
    <?php the_content(); ?>
    </section>

</main>

<?php
get_footer();
?>