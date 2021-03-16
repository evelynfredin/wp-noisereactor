<?php get_header(); ?>

<main role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <article class="blog-list hover:shadow-lg transform hover:-translate-y-1 ease-in duration-200">
                    <?php the_post_thumbnail(); ?>
                    <div class="px-5 my-4">
                        <h4 class="uppercase font-bold text-2xl"><?php the_title(); ?></h4>
                    </div>
                    <div class="px-5 flex flex-col pb-10">
                        <?php the_excerpt(); ?>
                        <p class="text-white inline mt-5"><a class="bg-blue-700 py-2 px-3 rounded-md hover:bg-blue-900 transition ease-out duration-500" href="<?php the_permalink(); ?>">Read more...</a></p>
                    </div>
                    <div class="badge">
                        <svg class="w-5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span><?php the_date(); ?></span>
                    </div>
                </article>
            </a>
        <?php endwhile;
    else : ?>
        <article>
            <p>Nothing to see.</p>
        </article>
    <?php endif; ?>
</main>

<?php get_footer();
