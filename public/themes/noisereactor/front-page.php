<?php get_header(); ?>

<main class="mb-16" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <?php the_content(); ?>
            </article>
        <?php endwhile;
    else : ?>
        <article>
            <p>Nothing to see.</p>
        </article>
    <?php endif; ?>

    <?php
    $args = [
        'numberposts' => 4,
        'order' => 'desc',
    ];

    $latest = get_posts($args);
    ?>
    <section class="front-page mt-10">
        <?php foreach ($latest as $post) :
            setup_postdata($post); ?>
            <article class="rounded-md overflow-hidden border hover:shadow-lg relative">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                    <div class="px-5 py-3">
                        <h4 class="uppercase font-bold text-lg"><?php the_title(); ?></h4>
                    </div>
                </a>
                <div class="badge">
                    <svg class="w-5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span><?php the_date(); ?></span>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</main>

<?php get_footer(); ?>
