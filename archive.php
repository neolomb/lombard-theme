<?php get_header(); ?>
    <div class="list_archiv">
        <ol>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
        </ol>
    </div>
<?php get_footer(); ?>
