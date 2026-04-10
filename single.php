<?php get_header(); ?>

<main class="single-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="project-entry">
            <div class="project-body <?php echo esc_attr(get_post_field('post_name')); ?>">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
