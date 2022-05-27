<?php /* Template Name: Калькулятор */ get_header(); ?>
   
    <?php include (TEMPLATEPATH . '/head.php'); ?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="wrap">
        <div class="calculator y-calc whaite" id="calculators">
            <?php include (TEMPLATEPATH . '/calculator.php'); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
<?php get_footer(); ?>

