<?php  get_header(); ?>

<div class="fon b100" style="background-image: url(<?php the_field('a_1'); ?>)">
    <?php include (TEMPLATEPATH . '/head.php'); ?>
    <div class="wrap">
        <div class="main-post center f22">
            <h1 class="f52 o"><?php the_field('a_2'); ?></h1>
            <p><?php the_field('a_3'); ?></p>
            <div class="flx jcc">
                <a href="<?php the_field('whatsapp','option'); ?>" class="btn">
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icon.svg#whatsap"></use>
                    </svg>
                    <span>
                         <span>Оценка через 212pWhatsApp</span>
                    <i><?php the_field('time','option'); ?></i>
                    </span>
 
				</a>
			</div>		
			
			<div class="flx jcc">
                <a href="<?php the_field('whatsapp','option'); ?>" class="btn">
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icon.svg#whatsap"></use>
                    </svg>
                    <span>
                         <span>Оценка через pWhatsApp</span>
                    <i><?php the_field('time','option'); ?></i>
                    </span>
 
				</a>
			</div>		
    </div>
</div>
<div class="wrap">
    <?php if(get_field('b_2')): ?>
    <div class="name f36 b60 center y-what" id="what"><?php the_field('b_1'); ?></div>
    <div class="grid b60">
        <?php while(has_sub_field('b_2')): ?>
        <div class="col-3">
            <div class="item-1">
                <div class="thumb"><img src="<?php the_sub_field('изображение'); ?>" alt=""></div>
                <div class="title f26"><?php the_sub_field('заголовок'); ?></div>
                <?php the_sub_field('список'); ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <div class="promo b100" style="background-image: url(<?php the_field('c_1'); ?>)">
        <div class="title f26"><?php the_field('c_2'); ?></div>
        <p class="b35 f18"><?php the_field('time','option'); ?></p>
        <div class="flx">
            <a href="<?php the_field('whatsapp','option'); ?>" class="btn-blu flx aic">
                <svg>
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icon.svg#whatsap"></use>
                </svg>Оценить онлайн
            </a>
        </div>
    </div>
    <div class="whait b100">
        <div class="center f36 b35 y-price" id="price">Как мы оцениваем</div>
        <div class="tabs b60">
            <div class="tabs-nav b70">
                <ul>
                    <li class="current"><span>Украшения</span>
                        <div class="slide-tab"></div>
                    </li>
                    <li><span>Технику</span></li>
                </ul>
            </div>
            <div>
                <div class="tabs-box">
                    <div class="w-1 w"><span><?php the_field('uk_1'); ?></span></div>
                    <div class="pic"><img src="<?php the_field('d_1'); ?>" alt=""></div>
                    <div class="w-4 w"><span><?php the_field('uk_4'); ?></span></div>
                    <div class="w-2 w"><span><?php the_field('uk_2'); ?></span></div>
                    <div class="w-3 w"><span><?php the_field('uk_3'); ?></span></div>
                    <div class="w-5 w"><span><?php the_field('uk_5'); ?></span></div>
                    <div class="w-6 w"><span><?php the_field('uk_6'); ?></span></div>
                </div>
                <div class="tabs-box">
                    <div class="w-1 w"><span><?php the_field('tex_1'); ?></span></div>
                    <div class="pic"><img src="<?php the_field('d_2'); ?>" alt=""></div>
                    <div class="w-4 w"><span><?php the_field('tex_4'); ?></span></div>
                    <div class="w-2 w"><span><?php the_field('tex_2'); ?></span></div>
                    <div class="w-3 w"><span><?php the_field('tex_3'); ?></span></div>
                    <div class="w-5 w"><span><?php the_field('tex_5'); ?></span></div>
                    <div class="w-6 w"><span><?php the_field('tex_6'); ?></span></div>
                </div>
            </div>
        </div>
        <!-- tabs -->
        <div class="flx jcc center">
            <div>
                <p class="b10">
                    <a href="<?php the_field('whatsapp','option'); ?>" class="btn-blu flx aic">
                        <svg>
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icon.svg#whatsap"></use>
                        </svg>Получить оценку через WhatsApp
                    </a>
                </p>
                <p class="gray"><?php the_field('time','option'); ?></p>
            </div>
        </div>
    </div>
    <!-- whait -->
    <div class="name center f36 y-why b60" id="why">Почему именно мы</div>
    <?php if(get_field('list_we_1')): ?>
    <div class="grid b20">
        <?php while(has_sub_field('list_we_1')): ?>
        <div class="col-2">
            <div class="item-2">
                <div class="icon">
                    <img src="<?php the_sub_field('иконка'); ?>" alt="">
                </div>
                <div class="info">
                    <div class="title f22"><?php the_sub_field('заголовок'); ?></div>
                    <div class="txt f18"><?php the_sub_field('текст'); ?></div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <!-- grid-2 -->
    <?php endif; ?>
    <?php if(get_field('list_we_2')): ?>
    <div class="grid b130">
        <?php while(has_sub_field('list_we_2')): ?>
        <div class="col-4">
            <div class="item-3">
                <div class="icon">
                    <img src="<?php the_sub_field('иконка'); ?>" alt="">
                </div>
                <div class="info">
                    <div class="title f22"><?php the_sub_field('заголовок'); ?></div>
                    <div class="txt f18"><?php the_sub_field('текст'); ?></div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <!-- grid-4 -->
    <?php endif; ?>
    
    <?php include (TEMPLATEPATH . '/calculator.php'); ?>
    
    <?php if(get_field('slider-list')): ?>
    <div class="slider-group b150">
        <div class="y-place"></div>
        <div class="slider-place">
            <?php while(has_sub_field('slider-list')): ?>
            <div>
                <?php
                $image = get_sub_field('изображение');
                if( $image ):

                    // Image variables.
                    $url = $image['url'];
                    $title = $image['title'];
                    $alt = $image['alt'];

                    // Thumbnail size attributes.
                    $size = 'slide';
                    $thumb = $image['sizes'][ $size ];

                    // Begin caption wrap.
                ?>                
                <div class="slider-item" style="background-image: url(<?php echo esc_url($thumb); ?>)">
                    <div class="inner">
                        <div class="title f36 b10"><?php the_sub_field('заголовок'); ?></div>
                        <div class="txt f18 b60"><?php the_sub_field('текст'); ?></div>
                        <div class="flx">
                            <a href="" class="btn-whaite">
                                <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 9.75C8.24264 9.75 9.25 8.74264 9.25 7.5C9.25 6.25736 8.24264 5.25 7 5.25C5.75736 5.25 4.75 6.25736 4.75 7.5C4.75 8.74264 5.75736 9.75 7 9.75Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7 1.5C5.4087 1.5 3.88258 2.13214 2.75736 3.25736C1.63214 4.38258 1 5.9087 1 7.5C1 8.919 1.3015 9.8475 2.125 10.875L7 16.5L11.875 10.875C12.6985 9.8475 13 8.919 13 7.5C13 5.9087 12.3679 4.38258 11.2426 3.25736C10.1174 2.13214 8.5913 1.5 7 1.5V1.5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Адреса отделений (22)
                            </a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="slider-nav">
            <div class="prev arrow">
                <svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.1133 15.885L5.24328 9L12.1133 2.115L9.99828 0L0.998281 9L9.99828 18L12.1133 15.885Z"/>
                </svg>

            </div>
            <div class="next arrow">
                <svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.886719 15.885L7.75672 9L0.886719 2.115L3.00172 0L12.0017 9L3.00172 18L0.886719 15.885Z"/>
                </svg>
            </div>
        </div>
    </div>
    
    <?php endif; ?>
    <?php if(get_field('faq','option')): ?>
    <div class="name f36 b45">Вопросы о работе ломбарда</div>
    <div class="accordion b130">
        <?php while(has_sub_field('faq','option')): ?>
        <div class="accordion-item">
            <div class="title_block f22"><?php the_sub_field('заголовок'); ?></div>
            <div class="text info f18">
                <?php the_sub_field('текст'); ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
<?php get_footer(); ?>

