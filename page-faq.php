<?php /* Template Name: Вопросы и ответы */
get_header(); ?><?php include (TEMPLATEPATH . '/head.php'); ?>
    <div class="wrap">
        <h1 class="faq-title f36 b30"><?php the_title(); ?></h1>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="faq_link" id="faq_link">
            <ul>
                <?php if(get_field('список')): ?>
                <?php while(has_sub_field('список')): $count2++ ?>
                <li><a href="#box-<?php echo $count2 ?>"><?php the_sub_field('якорь'); ?></a></li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="faq_page">
            <?php if(get_field('список')): ?>
            <?php while(has_sub_field('список')): $count++ ?>
            <div class="box" id="box-<?php echo $count ?>"> 
                
                <div class="title f36">
                    <?php the_sub_field('заголовок'); ?>
                </div>
                <div class="text clr"><?php the_sub_field('текст'); ?></div>
                <?php if (get_sub_field('вопросы_и_ответы')): ?>
                <div class="accordion">
                    <?php while (has_sub_field('вопросы_и_ответы')): ?>
                        <div class="accordion-item">
                            <div class="title_block f22"><?php the_sub_field('вопрос'); ?></div>
                            <div class="text info f18">
                                <?php the_sub_field('ответ'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <!-- accordion -->
                <?php endif; ?>
            </div>
            <!-- box -->
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
    </div>
    <!-- wrap -->
    <div id="up2">
        <svg width="15px" height="15px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 10L7.5 3L14 10" stroke="black" stroke-linecap="square" />
        </svg>
    </div>
<?php get_footer(); ?>

