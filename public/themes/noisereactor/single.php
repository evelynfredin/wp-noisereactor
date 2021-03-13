<?php get_header(); ?>
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <article class="single-blog">
            <h2 class="uppercase font-bold text-3xl"><?php the_title(); ?></h2>
            <p class="bg-gray-100 text-sm my-2 p-2"><?php the_date(); ?></p>
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
