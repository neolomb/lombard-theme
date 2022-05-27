<?php get_header(); ?>
    <?php include (TEMPLATEPATH . '/head.php'); ?>
    <div class="wrap">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="post">
            <div class="title f36 b40"><h1><?php the_title(); ?></h1></div>
            <div class="text clr f300">
                <?php the_content(''); ?>
            </div>
        </div>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
    </div>
    <!-- wrap -->
<?php get_footer(); ?>

