<?php
get_header();
?>

<main>

    <section class="strony">
        <h2>Strony</h2>
        <ul>
        <?php
        // wp_list_pages();
        foreach (get_pages() as $page):
            ?>
            <li><a href="<?=get_the_permalink($page);?>"><?=get_the_title($page);?></a></li>
            <?php
        endforeach;
        ?>
        </ul>
    </section>

    <section class="posty">
        <h2>Posty</h2>
        <ul>
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                if (has_post_thumbnail()):
                ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <figure>
                        <?php the_post_thumbnail(); ?>
                        <figcaption>
                            <?php the_title(); ?>
                        </figcaption>
                    </figure>
                </a>
                <?php
                endif;
            endwhile;
        endif;
        ?>
        </ul>
    </section>

</main>

<?php
get_footer();
?>