<?php get_header(); ?>
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php $the_content = apply_filters('the_content', get_the_content()); ?>

        <section class="mt-5">
            <h2 class="text-3xl font-bold mb-5"><?php the_title(); ?><span class="font-normal text-xl ml-3">
                    <a class="hover:text-blue-700" href="<?php the_field('artist_website') ?>"><?php the_field('artist_website') ?></a></span>
            </h2>
            <div class="flex flex-col lg:flex-row">
                <div class="w-full lg:w-3/5 h-auto object-cover">
                    <?php the_post_thumbnail(); ?>
                </div>

                <div class="w-full mt-5 lg:mt-0 lg:w-2/5 lg:ml-5">
                    <div class="bg-white rounded-lg p-5 text-lg border">
                        <?php echo $the_content; ?>
                    </div>

                    <div class="border rounded-lg mt-5 p-5">
                        <h3 class="text-xl font-bold">Genres</h3>
                        <?php $genres = get_the_terms($post, 'genre'); ?>
                        <?php foreach ($genres as $genre) : ?>
                            <p class="bg-blue-300 inline-block px-3 py-2 rounded-3xl mt-3 mr-2 text-gray-600"><?php echo $genre->name; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </section>

        <section class="my-10">
            <h3 class="uppercase text-blue-700 text-center font-bold text-2xl">Albums by <?php the_title(); ?></h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 mt-5">

                <?php
                $albums = get_field('artist_album');
                if ($albums) : ?>

                    <?php foreach ($albums as $post) : ?>
                        <div class="album-cover border rounded-lg hover:shadow-xl transform hover:-translate-y-1 ease-in duration-200">
                            <a href=" <?php the_permalink(); ?>"><?php the_post_thumbnail();  ?></a>
                        </div>
                    <?php endforeach; ?>
                    </ul>
                    <?php
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
