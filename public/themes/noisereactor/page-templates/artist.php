<?php /* Template Name: Artist */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php
$artists = get_posts(['post_type' => 'artist']);
?>

<section class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-5 mt-5">
    <?php foreach ($artists as $post) : setup_postdata($post); ?>
        <div class="bg-white rounded overflow-hidden shadow-sm border relative hover:shadow-lg">
            <a href="<?php the_permalink(); ?>">
                <div class="artist-img">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="bg-white text-secondary-200 rounded-full py-1 px-2 absolute bottom-0 right-0 m-2 mt-2">
                    <span class="text-md"><?php the_title(); ?></span>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</section>


<?php get_footer(); ?>
