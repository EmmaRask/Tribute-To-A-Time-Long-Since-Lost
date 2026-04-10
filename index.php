<?php get_header(); ?>

<main class="archive-content">
    <?php if ( have_posts() ) : ?>
        <ul class="post-list">
            <?php while ( have_posts() ) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?>
                        <h2><?php the_title(); ?></h2>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</main>

<?php get_footer(); ?>


