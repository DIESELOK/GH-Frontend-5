<?php

get_header();
?>
    <div class="container wrap">

        <?php get_sidebar(); ?>

        <main class="content">
        <?php

        if (have_posts()):
            while (have_posts()) : the_post(); ?>

            <article>
                <?php the_post_thumbnail()?>
                <h2><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
                <a href="<?php the_permalink(); ?>">Continue Reading</a>
            </article>
<?php
    endwhile;
    else:
        echo '<p>No content found</p>';
        endif; ?>

    </div>

    <section class="navigation">
        <div class="container">
            <ul>
                <li><a href="#"><span class="fa fa-long-arrow-left"></span>Previous</a></li>
                <li><a href="#">Next<span class="fa fa-long-arrow-right"></span></a></li>
            </ul>
        </div>
    </section>

<?php get_footer(); ?>