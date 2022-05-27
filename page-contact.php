<?php /* Template Name: Отделения */
get_header(); ?>

<?php include(TEMPLATEPATH . '/head.php'); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <div id="map" class="contacts__map b70 map">
            <div id='yamap_div_1' style='width:100%; height:500px; margin:10px;' class='yamapapi'></div>
        </div>

        <div class="wrap">
            <div class="grid b130">
                <?php if (get_field('otdel')): ?>
                    <?php while (has_sub_field('otdel')): ?>
                        <div class="col-2 full-992">
                            <div class="name f36 b40"><?php the_sub_field('город'); ?></div>
                            <?php if (get_sub_field('отделения')): ?>
                                <?php while (has_sub_field('отделения')): ?>
                                    <div class="item-adres">
                                        <div class="ll">
                                            <p><strong><?php the_sub_field('название'); ?></strong></p>
                                            <?php if (get_sub_field('метро')) { ?>
                                                <p class="color"><span
                                                            style="background-color: <?php the_sub_field('цвет'); ?>"></span><?php the_sub_field('метро'); ?>
                                                </p>
                                            <?php } ?>
                                            <?php if (get_sub_field('город')) { ?>
                                                <p><?php the_sub_field('город'); ?></p>
                                            <?php } ?>
                                            <p><?php the_sub_field('адрес'); ?></p>
                                        </div>
                                        <div class="rr">
                                            <p>
                                                <a href="tel:<?php the_sub_field('телефон'); ?>"><?php the_sub_field('телефон'); ?></a>
                                            </p>
                                            <?php the_sub_field('время_работы'); ?>
                                        </div>
										<?php if (get_sub_field('ссылка_на_карту')) { ?>
										<div class="b-block">
											<a targer="_bank" href="<?php the_sub_field('ссылка_на_карту'); ?>" class="departments-all" data-coord="<?php the_sub_field('координаты'); ?>">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 9.75C10.2426 9.75 11.25 8.74264 11.25 7.5C11.25 6.25736 10.2426 5.25 9 5.25C7.75736 5.25 6.75 6.25736 6.75 7.5C6.75 8.74264 7.75736 9.75 9 9.75Z" stroke="#37609E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9 1.5C7.4087 1.5 5.88258 2.13214 4.75736 3.25736C3.63214 4.38258 3 5.9087 3 7.5C3 8.919 3.3015 9.8475 4.125 10.875L9 16.5L13.875 10.875C14.6985 9.8475 15 8.919 15 7.5C15 5.9087 14.3679 4.38258 13.2426 3.25736C12.1174 2.13214 10.5913 1.5 9 1.5V1.5Z" stroke="#37609E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
											Проложить маршрут
											</a>
										</div>
										<?php } ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>

