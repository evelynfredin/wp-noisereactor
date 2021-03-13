<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php $labels = get_the_terms($post, 'label'); ?>
    <?php foreach ($labels as $label) : ?>
    <?php endforeach; ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php $the_content = apply_filters('the_content', get_the_content()); ?>

        <section class="album-container">
            <div class="album-cover border rounded-lg w-80">
                <?php the_post_thumbnail(); ?>
            </div>

            <div class="album-container--info border">
                <?php $artists = get_field('album_artist');
                foreach ($artists as $artist) : ?>
                    <h1 class="text-2xl md:text-4xl font-bold uppercase">
                        <a href="<?php echo get_permalink($artist); ?>">
                            <?php echo get_the_title($artist); ?>
                        </a>
                    </h1>
                <?php endforeach; ?>
                <h2 class="text-xl md:text-3xl font-bold uppercase text-blue-500 border-b pb-4 mb-4"><?php the_title(); ?></h2>

                <?php the_excerpt(); ?>
            </div>
        </section>

        <section class="lg:max-w-5xl md:max-w-2xl mx-auto flex flex-col lg:flex-row mt-16 items-start">
            <div class="w-full lg:w-2/3 lg:mr-4 rounded-lg">
                <?php if (!empty($the_content)) : ?>
                    <div class="review border">
                        <?php echo $the_content; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mt-5 lg:mt-0 w-full lg:w-1/3">
                <div class="p-3 pb-8 border rounded-lg mb-5 text-center">
                    <h3 class="album-h3">Album Info</h3>
                    <p class="font-bold album-meta">Version:</p>
                    <p class="album-meta"><?php the_field('album_edition') ?></p>
                    <p class="font-bold album-meta">Release date:</p>
                    <p class="album-meta"><?php the_field('album_release_date') ?></p>
                    <p class="font-bold album-meta">Label:</p>
                    <p class="album-meta"><?php echo $label->name; ?></p>
                    <p class="mt-3"><a class="album-meta bg-green-500 text-white p-2 rounded-md hover:bg-green-600 transform transition-colors duration-500" href="<?php the_field('album_spotify_link') ?>">Listen on Spotify</a></p>
                </div>

                <?php $similarAlbums = get_field('all_albums'); ?>
                <?php if ($similarAlbums) : ?>
                    <div class="p-3 pb-8 border rounded-lg mb-5 text-center">
                        <h3 class="album-h3">More by <?php echo get_the_title($artist); ?></h3>
                        <ul class="album-ulist px-3">
                            <?php foreach ($similarAlbums as $post) : ?>
                                <div class="border-b">
                                    <a href="<?php echo get_permalink($post->ID); ?>">
                                        <li class="album-list">
                                            <?php the_post_thumbnail();  ?> <?php echo get_the_title($post->ID); ?>
                                        </li>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
