<!-- calculator start -->
<div class="inner-cal">
    <form id="calculator" name="calculator" method="POST" action="">
    <div class="c-name">
        <h2 class="fz36">Калькулятор оценки золота</h2>
    </div>
    <div class="row mobile_mb">
        <div class="col ">
            <div class="form-item">
                <div class="label">Вес, грамм</div>
                <div class="field">
                    <input class="calc-input" type="number" name="weight" value="10.0" min="0.1" max="100.0" step="0.1" placeholder="Вес, грамм" />
                    <div class="slider slider-weight"></div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-item">
                <div class="label">Проба</div>
                <div class="field">
                    <input class="calc-input slider-sample-input" type="number" name="sample" value="585" placeholder="Проба" />
                    <div class="slider slider-sample"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row b30">
        <div class="col">
            <div class="form-item">
                <div class="label">Состояние изделия</div>
                <div class="field">
                    <select name="wear" id="wear" class="calc-input">
                        <option value="1">Без износа</option>
                        <option value="2">Средний износ</option>
                        <option value="3">Высокий износ</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col has_too">
            <div class="form-item">
                <div class="label">Вставка</div>
                <div class="field">
                    <select name="piece" id="piece" class="calc-input">
                        <option value="0">Нет</option>
                        <option value="1">Бриллиант</option>
                        <option value="2">Сапфир</option>
                        <option value="3">Рубин</option>
                        <option value="4">Изумруд</option>
                    </select>
                </div>
            </div>
            <div class="field-piece-weight form-item" style="display: none;">
                <div class="label small">Общий вес вставок, карат</div>
                <div class="field">
                    <input class="calc-input" type="number" name="piece_weight" value="1" min="0.1" max="5.0" step="0.01" placeholder="Вес вставки, карат" />
                    <div class="slider slider-piece-weight"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row mb110">
        <div class="col mobile_mb">
            <div class="form-item">
                <div class="label">Срок займа, дней</div>
                <div class="field">
                    <input class="calc-input" type="number" name="time" value="61" min="0" max="90" step="1" placeholder="Срок займа, дней" />
                    <div class="slider slider-time"></div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-item">
                <div class="label">Кредитная история</div>
                <div class="field">
                    <select name="client" id="client" class="calc-input">
                        <option value="1">Новый клиент</option>
                        <option value="2">Клиент с историей</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row aic">
        <div class="col">
            <div class="form-item">
                <div class="check">
                    <input type="checkbox" name="buying" id="by" value="1">
                    <label for="by">Планирую выкупить</label>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-item">
                <div class="field jcfe">
                    <button class="calc-process calc-button">Рассчитать</button>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="total_block">
        <div class="row">
            <div class="ll">
                <dl id="">
                    <dt>Процентная ставка в день</dt>
                    <dd><span class="count_1">0,00</span> %</dd>
                </dl>
                <dl id="">
                    <dt>Стоимость займа в день</dt>
                    <dd><span class="count_2">0</span> ₽</dd>
                </dl>
                <dl id="">
                    <dt>Общая сумма выплат по процентам</dt>
                    <dd><span class="count_3">0</span> ₽</dd>
                </dl>
            </div>
            <div class="rr">
                <div class="tatal_name">Сумма к получению</div>
                <div class="row_total">
                    <div class="col_total">
                        <div class="label">Без промокода</div>
                        <div class="sum price price_1">24 500 ₽</div>
                    </div>
                    <div class="col_total blu">
                        <div class="label">С учетом промокода</div>
                        <div class="sum price price_2">24 500 ₽</div>
                    </div>
                </div>
                <button class="calc-promo calc-button">Получить промокод</button>
            </div>
        </div>
        <div class="informer">Расчет параметров является предварительным</div>
    </div>
    <!-- total_block -->

</form>
</div>
<div class="popup">
    <div class="popup_overlay"></div>
    <div class="popup_wrap">
        <div class="popup_close">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
                <g>
                    <g>
                        <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872
c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872
c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052
L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z" />
                    </g>
                </g>
            </svg>
        </div>
        <div class="popup_name fz36"><?php if (empty($_COOKIE['promocode']) || $_COOKIE['promocode'] == '') { ?>Получить промокод<?php } else { ?>Ваш промокод<?php } ?></div>
        <div class="popup-text">
            <?php if (empty($_COOKIE['promocode']) || $_COOKIE['promocode'] == '') { ?>
                <p>Для получения промокода:</p>
                <ul>
                    <li>1. Оставьте свое имя и номер телефона</li>
                    <li>2. Получите промокод на указанный номер телефона</li>
                    <li>3. Предъявите промокод в ломбарде</li>
                    <li>4. Получите выгодные условия займа</li>
                </ul>
            <?php } else { ?>
                <div class="promocode-container">
                    <div class="promocode-inner">
                        <div class="ty">
                            <p>Благодарим Вас за обращение </p>
                            <p>Чтобы воспользоваться промокодом просто сфотографируйте его и покажите фотографию
                            в отделении.</p>
                            <p class="hot">Промокод:<i><?php echo $_COOKIE['promocode']; ?></i></p>
                            <p>Срок действия промокода - 24 часа</p>
                            <div class="calc-button popup_close-js">Закрыть</div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php if (empty($_COOKIE['promocode']) || $_COOKIE['promocode'] == '') { ?>
            <div class="popup-form">
                <form name="form-promocode" id="form-promocode" method="post" class="userform" action="" novalidate="novalidate" onsubmit="ym(86162049, 'reachGoal', 'PROMO_FORM_SEND'); return true;">
                    <div class="popup-form-item">
                        <div class="label">Ваше имя <sup>*</sup></div>
                        <div class="field">
                            <span class="wpcf7-form-control-wrap">
                                <input type="text" name="client-name" value="" size="40" class="calc-input" aria-required="true" aria-invalid="false" placeholder="Имя" />
                            </span>
                        </div>
                    </div>
                    <div class="popup-form-item">
                        <div class="label">Телефон <sup>*</sup></div>
                        <div class="field">
                            <span class="wpcf7-form-control-wrap">
                                <input type="tel" name="client-phone" value="" size="40" class="calc-input" id="phone" aria-required="true" aria-invalid="false" placeholder="(___) ___-__-__" />
                            </span>
                        </div>
                    </div>

                    <div class="popup-form-item">
                        <div class="check_small">
                            <input type="checkbox" name="client-privacy" id="cunform" checked="checked" value="1" />
                            <label for="cunform">Я соглашаюсь на обработку персональных данных</label>
                        </div>
                    </div>
                    <div class="popup-form-item">
                        <input type="submit" value="Получить промокод" class="calc-button" />
                    </div>
                    <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('get_promo_nonce'); ?>" />
                    <input type="hidden" name="action" value="get_promo" />
                </form>
            </div>
        <?php } ?>
    </div>
</div>
<!-- popup -->
<!-- calculator end -->
