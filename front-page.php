<?php get_header(); ?>

<main class="front-page">
    <section class="hero">
        <div class="hero-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sunset.jpg" alt="Stad i solnedgång">        
        </div>
        <?php
            function get_post_link_by_slug($slug, $label) {
            $post = get_page_by_path($slug, OBJECT, 'post');

                if ($post) {
                    return '<a href="' . get_permalink($post->ID) . '">' . $label . '</a>';
                }

                return '';
            }
        ?>

        <nav class="front-links">
            <?= get_post_link_by_slug('flowersots', 'Seasons'); ?>
            <?= get_post_link_by_slug('cyclops-eye', 'Cyclops'); ?>
            <?= get_post_link_by_slug('first-post', 'Firsts') ?>
        </nav>
    </section>
</main>

<?php get_footer(); ?>




