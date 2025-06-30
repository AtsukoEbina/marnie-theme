<?php
/* Template Name: Gallery Page */
get_header(); ?>

<main class="gallery-page container">
    <h2 class="gallery-title">Gallery</h2>

    <div class="gallery-list">
        <?php
        $gallery_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'category_name' => 'gallery'
        ));

        if ($gallery_query->have_posts()) :
            while ($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
                <article class="gallery-card">
                    <div class="gallery-image">
                        <a href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" class="modal-trigger">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>

                    <div class="gallery-info">
                        <h3><?php the_title(); ?></h3>
                        <div class="gallery-description">
                            <?php the_content(); ?>
                        </div>
                        <?php
                        $youtube_url = get_post_meta(get_the_ID(), 'youtube_url', true);
                        if ($youtube_url):
                        ?>
                            <p><a href="<?php echo esc_url($youtube_url); ?>" target="_blank" rel="noopener">参考にしたYouTubeを見る</a></p>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p>まだ作品がありません。</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
