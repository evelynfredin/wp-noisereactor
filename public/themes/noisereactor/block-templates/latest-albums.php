<?php

/**
 * Latest block Block Template.
 */

$postType = get_field('latest_posts_post_type') ?: 'post';
$numberOfPosts = get_field('latest_posts_number_of_posts') ?: 3;
$archiveLink = get_field('latest_posts_link_to_archive') ?: null;
$linkLabel = get_field('latest_posts_link_label') ?: 'All albums';

$latestPosts = get_posts([
    'post_type' => $postType,
    'numberposts' => $numberOfPosts,
    'order' => 'desc',
]);

?>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 latest-albums mb-10">
    <?php foreach ($latestPosts as $post) : ?>
        <div class="album">
            <a href="<?= get_the_permalink($post); ?>">
                <div class="flex relative">
                    <div class="album-tr album-info">
                        <p class="uppercase font-semibold text-right -mt-2"><?= get_the_title($post); ?>
                            <span>
                                <svg class="w-5 text-current inline-block" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </span>
                        </p>
                    </div>
                    <div class="cover">
                        <?= get_the_post_thumbnail($post, 'medium'); ?>
                    </div>
                </div>
                <div class="text-right text-xs mt-1">Added <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
