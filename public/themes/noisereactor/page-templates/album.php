<?php /* Template Name: Album */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php
$albums = get_posts(['post_type' => 'album']);
?>

<?php if (count($albums)) : ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($albums as $post) : setup_postdata($post); ?>
            <div class="album">
                <a href="<?php the_permalink(); ?>">
                    <div class="flex relative">
                        <div class="album-tr album-info">
                            <?php $artists = get_field('album_artist');
                            foreach ($artists as $artist) : ?>
                                <p class="font-bold">
                                    <?php echo get_the_title($artist); ?>
                                </p>
                            <?php endforeach; ?>
                            <p class="uppercase font-semibold text-right -mt-2"><?php the_title(); ?>
                                <span>
                                    <svg class="w-5 text-current inline-block" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd">
                                        </path>
                                    </svg>
                                </span>
                            </p>
                        </div>
                        <div class="cover">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    </div>
                    <div class="text-right text-xs mt-1">Added <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
