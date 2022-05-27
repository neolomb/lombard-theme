<?php /* Template Name: Главная */
    get_header(); ?>
<div id="main" class="fon b100" style="background-image: url(<?php the_field('a_1'); ?>)">
    <?php include(TEMPLATEPATH . '/head.php'); ?>
    <div class="wrap">
        <div class="main-post center f22">
            <h1 class="f52 o"><?php the_field('a_2'); ?></h1>
            <p><?php the_field('a_3'); ?></p>
            <div class="flx jcc">
                <a href="<?php the_field('whatsapp', 'option'); ?>" class="btn">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.0859 2.90685C16.1634 1.98268 15.0658 1.24988 13.8567 0.750912C12.6476 0.251943 11.3511 -0.00327912 10.0421 3.18051e-05C4.55351 3.18051e-05 0.0854131 4.44582 0.0831946 9.91059C0.0831946 11.6571 0.541319 13.3617 1.41209 14.8653L0 20L5.27897 18.6211C6.73919 19.4122 8.37513 19.8271 10.0377 19.8278H10.0421C15.5296 19.8278 19.9977 15.382 20 9.91722C20.0037 8.61504 19.7481 7.32503 19.248 6.12175C18.7478 4.91847 18.013 3.82578 17.0859 2.90685ZM10.0421 18.1552H10.0388C8.5563 18.1554 7.10108 17.7584 5.82583 17.006L5.52412 16.8271L2.39156 17.6452L3.22684 14.6059L3.0305 14.2946C2.20165 12.9813 1.76287 11.4615 1.76483 9.91059C1.76705 5.36876 5.47974 1.67369 10.0455 1.67369C11.1328 1.67128 12.2098 1.88354 13.2142 2.29816C14.2186 2.71279 15.1304 3.32156 15.8968 4.08923C16.6673 4.85324 17.278 5.76166 17.6937 6.762C18.1093 7.76233 18.3216 8.83473 18.3183 9.91722C18.3161 14.4591 14.6034 18.1552 10.0421 18.1552ZM14.5823 11.985C14.3327 11.8602 13.1103 11.2619 12.8818 11.1791C12.6544 11.0963 12.4892 11.0554 12.3228 11.3027C12.1564 11.55 11.6794 12.1075 11.5341 12.2731C11.3888 12.4387 11.2435 12.4586 10.995 12.335C10.7465 12.2113 9.94452 11.9497 8.99388 11.1062C8.254 10.4493 7.75484 9.63901 7.60952 9.39061C7.46421 9.14221 7.59399 9.00863 7.71934 8.88498C7.83138 8.77458 7.96782 8.59573 8.09205 8.45111C8.21629 8.30649 8.25733 8.20382 8.34053 8.03822C8.42372 7.87262 8.38268 7.72799 8.31945 7.60435C8.25733 7.4796 7.75927 6.26079 7.55184 5.76509C7.35107 5.28485 7.14585 5.34889 6.99278 5.34226C6.83424 5.33581 6.67557 5.33286 6.5169 5.33343C6.39073 5.33663 6.26658 5.36574 6.15225 5.41893C6.03791 5.47213 5.93584 5.54826 5.85246 5.64255C5.62395 5.89095 4.98169 6.48931 4.98169 7.70812C4.98169 8.92693 5.87353 10.1049 5.99777 10.2705C6.12201 10.4361 7.75262 12.9366 10.2485 14.0097C10.843 14.2647 11.3067 14.4171 11.6672 14.5319C12.2629 14.7207 12.8053 14.6931 13.2346 14.6302C13.7127 14.5595 14.7066 14.0318 14.914 13.4533C15.1214 12.8748 15.1214 12.3791 15.0593 12.2753C14.9972 12.1716 14.8297 12.1086 14.5823 11.985Z"
                            fill="white"/>
                    </svg>
                    <span>
                    <span>Оценить через WhatsApp</span>
                    <i><?php the_field('time', 'option'); ?></i>
                    </span>
                </a>
            </div>
            <br>
            <div class="flx jcc">
                <a href="https://iiii.chat/g6HL_8714" class="btn-telegram">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.4544 2.00161C17.2383 2.01733 17.0262 2.06804 16.8263 2.15174H16.8236C16.6317 2.22782 15.7195 2.61156 14.3327 3.19323L9.36286 5.28631C5.79676 6.78761 2.29124 8.26603 2.29124 8.26603L2.33298 8.24987C2.33298 8.24987 2.09129 8.32931 1.83883 8.50233C1.68286 8.60158 1.54865 8.73144 1.44432 8.88406C1.32044 9.06583 1.2208 9.34387 1.25783 9.63134C1.31842 10.1174 1.63349 10.4089 1.8597 10.5698C2.0886 10.7328 2.30672 10.8088 2.30672 10.8088H2.31211L5.5995 11.9163C5.74694 12.3896 6.60127 15.1983 6.8066 15.8453C6.92779 16.2317 7.0456 16.4734 7.19304 16.6579C7.2644 16.7521 7.34788 16.8309 7.44819 16.8942C7.50034 16.9245 7.55595 16.9485 7.61381 16.9655L7.58015 16.9575C7.59025 16.9601 7.59832 16.9682 7.60573 16.9709C7.63266 16.9783 7.65084 16.981 7.68517 16.9864C8.20558 17.1439 8.62366 16.8208 8.62366 16.8208L8.64722 16.8019L10.5881 15.0347L13.8412 17.5304L13.9153 17.562C14.5932 17.8596 15.2799 17.694 15.6428 17.4018C16.0083 17.1076 16.1504 16.7312 16.1504 16.7312L16.1739 16.6707L18.6878 3.79241C18.7592 3.47464 18.7773 3.17707 18.6986 2.88826C18.6173 2.59596 18.4298 2.34456 18.1728 2.18338C17.957 2.05218 17.7067 1.98885 17.4544 2.00161V2.00161ZM17.3864 3.38173C17.3837 3.42415 17.3918 3.41944 17.373 3.5009V3.5083L14.8827 16.2526C14.8719 16.2708 14.8537 16.3105 14.8039 16.3502C14.7514 16.3919 14.7097 16.4182 14.4909 16.3313L10.5121 13.2809L8.10863 15.4716L8.61356 12.2468L15.1143 6.18776C15.3822 5.93867 15.2927 5.88616 15.2927 5.88616C15.3115 5.58051 14.8881 5.79662 14.8881 5.79662L6.69081 10.8748L6.68812 10.8613L2.75914 9.53844V9.53575L2.74904 9.53373C2.75593 9.53144 2.76267 9.52874 2.76923 9.52565L2.79078 9.51487L2.81165 9.50747C2.81165 9.50747 6.31986 8.02905 9.88597 6.52775C11.6714 5.77575 13.4703 5.01836 14.8537 4.434C15.6742 4.08863 16.4956 3.74528 17.3178 3.40395C17.373 3.38241 17.3467 3.38241 17.3864 3.38241V3.38173Z" fill="white"/>
                    </svg>
                    <span>
                    <span>Оценить через Telegram &#160 </span>
                    <i><?php the_field('time', 'option'); ?></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="nav-arrow">
        <svg class="nav-arrow_desktop" width="24" height="48" viewBox="0 0 24 48" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.88">
                <rect x="5.3" y="0.8" width="13.4" height="22.4" rx="6.7" stroke="white" stroke-width="1.6"/>
                <rect x="10.5" y="4" width="3" height="5" rx="1.5" fill="white"/>
                <path d="M7 37L12 42L17 37" stroke="white" stroke-width="1.6"/>
                <path d="M7 30L12 35L17 30" stroke="white" stroke-width="1.6"/>
            </g>
        </svg>
        <svg class="nav-arrow_mob" width="24" height="24" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M7 13L12 18L17 13" stroke="white" stroke-width="1.6"/>
            <path d="M7 6L12 11L17 6" stroke="white" stroke-width="1.6"/>
        </svg>
    </div>
</div>
<div class="wrap">
    <?php if (get_field('b_2')): ?>
    <div class="landingItem" id="what">
        <div class="name f36 b60 center"><?php the_field('b_1'); ?></div>
        <div class="grid b60">
            <?php while (has_sub_field('b_2')): ?>
            <div class="col-3">
                <div class="item-1">
                    <div class="thumb"><img src="<?php the_sub_field('изображение'); ?>"
                        alt="<?php the_sub_field('заголовок'); ?>"></div>
                    <div class="title f26"><?php the_sub_field('заголовок'); ?></div>
                    <?php the_sub_field('список'); ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
    <div class="promo b70" style="background-image: url(<?php the_field('c_1'); ?>)">
        <div class="title f26"><?php the_field('c_2'); ?></div>
        <p class="b35 f18"><?php the_field('time', 'option'); ?></p>
        <div class="flx">
            <a href="<?php the_field('whatsapp', 'option'); ?>" class="btn-blu flx aic">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17.0859 2.90685C16.1634 1.98268 15.0658 1.24988 13.8567 0.750912C12.6476 0.251943 11.3511 -0.00327912 10.0421 3.18051e-05C4.55351 3.18051e-05 0.0854131 4.44582 0.0831946 9.91059C0.0831946 11.6571 0.541319 13.3617 1.41209 14.8653L0 20L5.27897 18.6211C6.73919 19.4122 8.37513 19.8271 10.0377 19.8278H10.0421C15.5296 19.8278 19.9977 15.382 20 9.91722C20.0037 8.61504 19.7481 7.32503 19.248 6.12175C18.7478 4.91847 18.013 3.82578 17.0859 2.90685ZM10.0421 18.1552H10.0388C8.5563 18.1554 7.10108 17.7584 5.82583 17.006L5.52412 16.8271L2.39156 17.6452L3.22684 14.6059L3.0305 14.2946C2.20165 12.9813 1.76287 11.4615 1.76483 9.91059C1.76705 5.36876 5.47974 1.67369 10.0455 1.67369C11.1328 1.67128 12.2098 1.88354 13.2142 2.29816C14.2186 2.71279 15.1304 3.32156 15.8968 4.08923C16.6673 4.85324 17.278 5.76166 17.6937 6.762C18.1093 7.76233 18.3216 8.83473 18.3183 9.91722C18.3161 14.4591 14.6034 18.1552 10.0421 18.1552ZM14.5823 11.985C14.3327 11.8602 13.1103 11.2619 12.8818 11.1791C12.6544 11.0963 12.4892 11.0554 12.3228 11.3027C12.1564 11.55 11.6794 12.1075 11.5341 12.2731C11.3888 12.4387 11.2435 12.4586 10.995 12.335C10.7465 12.2113 9.94452 11.9497 8.99388 11.1062C8.254 10.4493 7.75484 9.63901 7.60952 9.39061C7.46421 9.14221 7.59399 9.00863 7.71934 8.88498C7.83138 8.77458 7.96782 8.59573 8.09205 8.45111C8.21629 8.30649 8.25733 8.20382 8.34053 8.03822C8.42372 7.87262 8.38268 7.72799 8.31945 7.60435C8.25733 7.4796 7.75927 6.26079 7.55184 5.76509C7.35107 5.28485 7.14585 5.34889 6.99278 5.34226C6.83424 5.33581 6.67557 5.33286 6.5169 5.33343C6.39073 5.33663 6.26658 5.36574 6.15225 5.41893C6.03791 5.47213 5.93584 5.54826 5.85246 5.64255C5.62395 5.89095 4.98169 6.48931 4.98169 7.70812C4.98169 8.92693 5.87353 10.1049 5.99777 10.2705C6.12201 10.4361 7.75262 12.9366 10.2485 14.0097C10.843 14.2647 11.3067 14.4171 11.6672 14.5319C12.2629 14.7207 12.8053 14.6931 13.2346 14.6302C13.7127 14.5595 14.7066 14.0318 14.914 13.4533C15.1214 12.8748 15.1214 12.3791 15.0593 12.2753C14.9972 12.1716 14.8297 12.1086 14.5823 11.985Z"
                        fill="white"/>
                </svg>
                Оценить онлайн
            </a>
        </div>
    </div>
    <div class="whait b70">
        <div id="price" class="landingItem">
            <div class="center f36 b35">Как мы оцениваем</div>
            <div class="tabs b60">
                <div class="tabs-nav b35">
                    <ul>
                        <li class="current">
                            <span>Украшения</span>
                            <div class="slide-tab"></div>
                        </li>
                        <li><span>Технику</span></li>
                    </ul>
                </div>
                <div>
                    <div class="tabs-box">
                        <div class="of">
                            <div class="w-1 w"><span><?php the_field('uk_1'); ?></span></div>
                            <div class="pic"><img src="<?php the_field('d_1'); ?>" alt="Украшения"></div>
                            <div class="w-4 w"><span><?php the_field('uk_4'); ?></span></div>
                            <div class="w-2 w"><span><?php the_field('uk_2'); ?></span></div>
                            <div class="w-3 w"><span><?php the_field('uk_3'); ?></span></div>
                            <div class="w-5 w"><span><?php the_field('uk_5'); ?></span></div>
                            <div class="w-6 w"><span><?php the_field('uk_6'); ?></span></div>
                        </div>
                    </div>
                    <div class="tabs-box">
                        <div class="of">
                            <div class="w-1 w"><span><?php the_field('tex_1'); ?></span></div>
                            <div class="pic"><img src="<?php the_field('d_2'); ?>" alt="Техника"></div>
                            <div class="w-4 w"><span><?php the_field('tex_4'); ?></span></div>
                            <div class="w-2 w"><span><?php the_field('tex_2'); ?></span></div>
                            <div class="w-3 w"><span><?php the_field('tex_3'); ?></span></div>
                            <div class="w-5 w"><span><?php the_field('tex_5'); ?></span></div>
                            <div class="w-6 w"><span><?php the_field('tex_6'); ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tabs -->
            <div class="flx jcc center">
                <div>
                    <p class="b10">
                        <a href="<?php the_field('whatsapp', 'option'); ?>" class="btn-blu flx aic">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.0859 2.90685C16.1634 1.98268 15.0658 1.24988 13.8567 0.750912C12.6476 0.251943 11.3511 -0.00327912 10.0421 3.18051e-05C4.55351 3.18051e-05 0.0854131 4.44582 0.0831946 9.91059C0.0831946 11.6571 0.541319 13.3617 1.41209 14.8653L0 20L5.27897 18.6211C6.73919 19.4122 8.37513 19.8271 10.0377 19.8278H10.0421C15.5296 19.8278 19.9977 15.382 20 9.91722C20.0037 8.61504 19.7481 7.32503 19.248 6.12175C18.7478 4.91847 18.013 3.82578 17.0859 2.90685ZM10.0421 18.1552H10.0388C8.5563 18.1554 7.10108 17.7584 5.82583 17.006L5.52412 16.8271L2.39156 17.6452L3.22684 14.6059L3.0305 14.2946C2.20165 12.9813 1.76287 11.4615 1.76483 9.91059C1.76705 5.36876 5.47974 1.67369 10.0455 1.67369C11.1328 1.67128 12.2098 1.88354 13.2142 2.29816C14.2186 2.71279 15.1304 3.32156 15.8968 4.08923C16.6673 4.85324 17.278 5.76166 17.6937 6.762C18.1093 7.76233 18.3216 8.83473 18.3183 9.91722C18.3161 14.4591 14.6034 18.1552 10.0421 18.1552ZM14.5823 11.985C14.3327 11.8602 13.1103 11.2619 12.8818 11.1791C12.6544 11.0963 12.4892 11.0554 12.3228 11.3027C12.1564 11.55 11.6794 12.1075 11.5341 12.2731C11.3888 12.4387 11.2435 12.4586 10.995 12.335C10.7465 12.2113 9.94452 11.9497 8.99388 11.1062C8.254 10.4493 7.75484 9.63901 7.60952 9.39061C7.46421 9.14221 7.59399 9.00863 7.71934 8.88498C7.83138 8.77458 7.96782 8.59573 8.09205 8.45111C8.21629 8.30649 8.25733 8.20382 8.34053 8.03822C8.42372 7.87262 8.38268 7.72799 8.31945 7.60435C8.25733 7.4796 7.75927 6.26079 7.55184 5.76509C7.35107 5.28485 7.14585 5.34889 6.99278 5.34226C6.83424 5.33581 6.67557 5.33286 6.5169 5.33343C6.39073 5.33663 6.26658 5.36574 6.15225 5.41893C6.03791 5.47213 5.93584 5.54826 5.85246 5.64255C5.62395 5.89095 4.98169 6.48931 4.98169 7.70812C4.98169 8.92693 5.87353 10.1049 5.99777 10.2705C6.12201 10.4361 7.75262 12.9366 10.2485 14.0097C10.843 14.2647 11.3067 14.4171 11.6672 14.5319C12.2629 14.7207 12.8053 14.6931 13.2346 14.6302C13.7127 14.5595 14.7066 14.0318 14.914 13.4533C15.1214 12.8748 15.1214 12.3791 15.0593 12.2753C14.9972 12.1716 14.8297 12.1086 14.5823 11.985Z"
                                    fill="white"/>
                            </svg>
                            Получить оценку через WhatsApp
                        </a>
                    </p>
                    <p class="gray"><?php the_field('time', 'option'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- whait -->
    <div class="landingItem" id="why">
        <div class="name center f36  b60">Почему именно мы</div>
        <?php if (get_field('list_we_1')): ?>
        <div class="grid b20">
            <?php while (has_sub_field('list_we_1')): ?>
            <div class="col-2">
                <div class="item-2">
                    <div class="icon">
                        <img src="<?php the_sub_field('иконка'); ?>" alt="<?php the_sub_field('alt'); ?>">
                    </div>
                    <div class="info">
                        <div class="title f22"><?php the_sub_field('заголовок'); ?></div>
                        <div class="txt f18"><?php the_sub_field('текст'); ?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- grid-2 -->
    <?php endif; ?>
    <?php if (get_field('list_we_2')): ?>
    <div class="grid b70">
        <?php while (has_sub_field('list_we_2')): ?>
        <div class="col-4">
            <div class="item-3">
                <div class="icon">
                    <img src="<?php the_sub_field('иконка'); ?>" alt="<?php the_sub_field('alt'); ?>">
                </div>
                <div class="info">
                    <div class="title f22"><?php the_sub_field('заголовок'); ?></div>
                    <div class="txt f18 center"><?php the_sub_field('текст'); ?></div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <!-- grid-4 -->
    <?php endif; ?>
    <div class="calculator b100 landingItem" id="calculators">
        <?php include(TEMPLATEPATH . '/calculator.php'); ?>
    </div>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="name f36 b45">Наши отделения</div>
    <div class="departments b130">
        <div class="departments-grid">
            <div class="departments-address">
                <div class="ll">
                    <p class="departments-title">г. Химки</p>
                    <p class="departments-city">ул. Железнодорожная 21</p>
                </div>
                <div class="rr">
                    <p class="departments-phone">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.1409 16.5307C19.3965 15.7807 17.5937 14.6862 16.719 14.2451C15.58 13.6713 15.4862 13.6245 14.5909 14.2896C13.9937 14.7335 13.5967 15.1301 12.8978 14.981C12.1989 14.832 10.6801 13.9915 9.35027 12.6659C8.02042 11.3402 7.13121 9.77742 6.98167 9.08086C6.83214 8.3843 7.23527 7.99195 7.67496 7.39336C8.29464 6.54961 8.24777 6.40898 7.71808 5.26992C7.30511 4.38398 6.17871 2.59805 5.42589 1.85742C4.62058 1.06195 4.62058 1.20258 4.10167 1.4182C3.67922 1.59595 3.27394 1.812 2.89089 2.06367C2.14089 2.56195 1.72464 2.97586 1.43355 3.59789C1.14246 4.21992 1.01167 5.6782 2.51496 8.40914C4.01824 11.1401 5.07292 12.5365 7.25589 14.7134C9.43886 16.8902 11.1175 18.0607 13.5714 19.437C16.607 21.1371 17.7714 20.8057 18.3953 20.5151C19.0192 20.2245 19.435 19.812 19.9342 19.062C20.1865 18.6796 20.403 18.2747 20.5811 17.8526C20.7971 17.3355 20.9378 17.3355 20.1409 16.5307Z"
                                stroke="#37609E" stroke-width="1.8" stroke-miterlimit="10"/>
                        </svg>
                        <a href="tel:+78002509032">8 800 250 90 32</a>
                    </p>
                    <div class="departments-time">
                        <p>Ежедневно с 09:00 до 20:00</p>
                    </div>
                </div>
            </div>
            <div class="departments-address">
                <div class="ll">
                    <p class="departments-title">г. Балашиха</p>
                    <p class="departments-city">ул. Советская 1Е, ТЦ Атлантик</p>
                </div>
                <div class="rr">
                    <p class="departments-phone">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.1409 16.5307C19.3965 15.7807 17.5937 14.6862 16.719 14.2451C15.58 13.6713 15.4862 13.6245 14.5909 14.2896C13.9937 14.7335 13.5967 15.1301 12.8978 14.981C12.1989 14.832 10.6801 13.9915 9.35027 12.6659C8.02042 11.3402 7.13121 9.77742 6.98167 9.08086C6.83214 8.3843 7.23527 7.99195 7.67496 7.39336C8.29464 6.54961 8.24777 6.40898 7.71808 5.26992C7.30511 4.38398 6.17871 2.59805 5.42589 1.85742C4.62058 1.06195 4.62058 1.20258 4.10167 1.4182C3.67922 1.59595 3.27394 1.812 2.89089 2.06367C2.14089 2.56195 1.72464 2.97586 1.43355 3.59789C1.14246 4.21992 1.01167 5.6782 2.51496 8.40914C4.01824 11.1401 5.07292 12.5365 7.25589 14.7134C9.43886 16.8902 11.1175 18.0607 13.5714 19.437C16.607 21.1371 17.7714 20.8057 18.3953 20.5151C19.0192 20.2245 19.435 19.812 19.9342 19.062C20.1865 18.6796 20.403 18.2747 20.5811 17.8526C20.7971 17.3355 20.9378 17.3355 20.1409 16.5307Z"
                                stroke="#37609E" stroke-width="1.8" stroke-miterlimit="10"/>
                        </svg>
                        <a href="tel:+78002509032">8 800 250 90 32</a>
                    </p>
                    <div class="departments-time">
                        <p>Пн-Пт с 9:00 до 20:00</p>
                        <p>Сб-Вс с 10:00 до 19:00</p>
                    </div>
                </div>
            </div>
            <div class="departments-address">
                <div class="ll">
                    <p class="departments-title">г. Подольск</p>
                    <p class="departments-city">Вокзальная площадь 4а стр.2</p>
                </div>
                <div class="rr">
                    <p class="departments-phone">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.1409 16.5307C19.3965 15.7807 17.5937 14.6862 16.719 14.2451C15.58 13.6713 15.4862 13.6245 14.5909 14.2896C13.9937 14.7335 13.5967 15.1301 12.8978 14.981C12.1989 14.832 10.6801 13.9915 9.35027 12.6659C8.02042 11.3402 7.13121 9.77742 6.98167 9.08086C6.83214 8.3843 7.23527 7.99195 7.67496 7.39336C8.29464 6.54961 8.24777 6.40898 7.71808 5.26992C7.30511 4.38398 6.17871 2.59805 5.42589 1.85742C4.62058 1.06195 4.62058 1.20258 4.10167 1.4182C3.67922 1.59595 3.27394 1.812 2.89089 2.06367C2.14089 2.56195 1.72464 2.97586 1.43355 3.59789C1.14246 4.21992 1.01167 5.6782 2.51496 8.40914C4.01824 11.1401 5.07292 12.5365 7.25589 14.7134C9.43886 16.8902 11.1175 18.0607 13.5714 19.437C16.607 21.1371 17.7714 20.8057 18.3953 20.5151C19.0192 20.2245 19.435 19.812 19.9342 19.062C20.1865 18.6796 20.403 18.2747 20.5811 17.8526C20.7971 17.3355 20.9378 17.3355 20.1409 16.5307Z"
                                stroke="#37609E" stroke-width="1.8" stroke-miterlimit="10"/>
                        </svg>
                        <a href="tel:+78002509032">8 800 250 90 32</a>
                    </p>
                    <div class="departments-time">
                        <p>Ежедневно с 10:00 до 20:00</p>
                    </div>
                </div>
            </div>
            <a class="departments-all" href="<?php print get_page_link(103); ?>">Все адреса</a>
        </div>
        <div id="map" class="contacts__map map departments-map">
            <div id='yamap_div_1' style='width:100%; height:500px; margin:10px;' class='yamapapi'></div>
        </div>
    </div>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
    <?php if (get_field('faq2', 'option')): ?>
    <div id="faq" class="name f36 b45">Вопросы о работе ломбарда</div>
    <div class="accordion b130">
        <?php while (has_sub_field('faq2', 'option')): ?>
        <div class="accordion-item">
            <div class="title_block f22"><?php the_sub_field('заголовок'); ?></div>
            <div class="text info f18">
                <?php the_sub_field('текст'); ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</div>
<!-- wrap -->
<!-- <div class="bottom_box">
    <div class="wrap">
        <div class="bottom_form">
            <div class="name f36 b45 center">Заполните форму обратной связи</div>
            <div class="txt">Опишите проблему, а мы вернёмся с решением. Пожалуйста, проверьте данные перед отправкой и укажите как можно больше подробностей. Это поможет нам быстрее вернуться с ответом.</div>
            <div class="inner">
                <div class="b25 form-field">
                    <div class="ins">
                        <input id="fio" type="text" class="input" placeholder=" ">
                        <label for="fio" class="lab">Фамилия Имя Отчество</label>
                    </div>
                </div>
                <div class="b25 form-field">
                    <div class="ins">
                        <input type="text" class="input" placeholder="">
                        <label class="lab">Дата рождения</label>
                    </div>
                </div>
                <div class="row_thwo">
                    <div class="b25 form-field">
                        <div class="ins">
                            <input type="tel" class="input" value="+7 (" placeholder=" ">
                            <label class="lab">Мобильный телефон</label>
                        </div>
                        <div class="mes">Пришлем смс, когда решение будет готов</div>
                    </div>
                    <div class="b25 form-field">
                        <div class="ins">
                            <input type="email" class="input" placeholder=" ">
                            <label class="lab">Электронная почта</label>
                        </div>
                        <div class="mes">На нее отправим информацию по заявке</div>
                    </div>
                </div>
                <div class="b25 form-field">
                    <div class="ins">
                        <select name="" id="">
                            <option value="">Задать вопрос/рассказать о проблеме</option>
                            <option value="">Задать вопрос/рассказать о проблеме</option>
                        </select>
                        <label class="lab">Тип обращения</label>
                    </div>
                </div>
                <div class="b25 form-field">
                    <textarea name="" class="input" placeholder="Текст обращения"></textarea>
                    <div class="mes">Максимум 2048 символов</div>
                </div>
                <div class="b25 form-field">
                    <div class="check_small">
                        <input type="checkbox" name="client-privacy" id="cunform33" checked="checked" value="1">
                        <label for="cunform33">Я даю согласие на обработку и использование моих персональных данных</label>
                    </div>
                </div>
                <div class="b25 form-field">
                    <input type="submit" class="calc-button" value="Отправить">
                </div>
            </div>
        </div>
    </div>
</div> -->
<?php get_footer(); ?>