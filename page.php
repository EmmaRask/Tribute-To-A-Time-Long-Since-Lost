<?php get_header(); ?>

<main class="page-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="project-entry">
            <h1><?php the_title(); ?></h1>
            <div class="page-body">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>




