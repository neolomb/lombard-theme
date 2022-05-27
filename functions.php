<?php
add_filter( 'disable_wpseo_json_ld_search', '__return_true' );

$default_gold_price = 5000;

/*
function get_current_gold_price() {
	// получение страницы для парсинга
	// http://goldpricez.com/ru/gram второй вариант если будут проблемы, но у него ограничены запросы
	$response = wp_remote_get( 'https://www.livepriceofgold.com/russia-gold-price.html' );

	// если ошибка в запросе возвращаем дефолтное значение
	if ( is_wp_error( $response ) ) {
		return $GLOBALS['default_gold_price'];
	}

	// страницы для парсинга
	$data = wp_remote_retrieve_body( $response );

	// если ошибка в запросе возвращаем дефолтное значение
	if ( is_wp_error( $data ) ) {
		return $GLOBALS['default_gold_price'];
	}

	// очищаем от лишнего и тегов
	$result = preg_replace("/\s+/", " ", strip_tags($data));

	// уникальная строка для поиска
    $search_string = 'Gold Rate per Gram in RUB';
	// индекса начала цены
    $index = strpos($result, $search_string) + strlen($search_string);

	// вырезаем цену из страницы
    $result_string = str_replace(' ', '', (substr($result, $index, 9)));

	// преобразуем строку в число с плавающей запятой
    $result_number = floatval($result_string);

	return $result_number;
}.   Это функция парсящая стоимость грамма золота с бирж */ 

if( function_exists('acf_add_options_page') ) {
 acf_add_options_page(
  array(
   'page_title' => 'Информация',
   'menu_title' => 'Информация',
   'menu_slug' => 'theme-contacts-settings',
   'capability' => 'edit_posts',
   'icon_url' => 'dashicons-art',
   'position' => '60',
   'redirect' => false
  )
 );
}
register_nav_menus( array(
    'main' => 'Главное',
    'footer' => 'Футер'
) );


function do_excerpt($string, $word_limit) { 
  $words = explode(' ', $string, ($word_limit + 1)); 
  if (count($words) > $word_limit) 
    array_pop($words); 
  echo implode(' ', $words).' ...'; 
}



function lmb_scripts() {
	wp_enqueue_style( 'lmb-style', get_stylesheet_uri() );
    
	wp_register_script( 'jq', ( 'https://neolombard.ru/wp-content/themes/lombard/js/jquery-latest.min.js' ), false, null, true );
	wp_enqueue_script( 'jq' );
	if (get_field('price_585', 'option')) {
		wp_localize_script(
			'jq',
			'calc_params',
			array(
				'cost' => get_field('price_585', 'option'),
			)
		);
	}
	
	wp_localize_script(
		'jq',
		'ajax_var',
		array(
			'url' => admin_url('admin-ajax.php'),
		)
	);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lmb_scripts' );
    
    

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);


if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );
// This theme styles the visual editor with editor-style.css to match the theme style.
add_editor_style();

// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );
add_image_size( 'slide', 1224, 580, array( 'center', 'center' ) );

// Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

add_filter('get_search_form', 'ba_search_form');
function ba_search_form($form) {
	$form = '
		<form role="search" method="get" class="woocommerce-product-search searchform" action="' . site_url('/') . '">
			<input type="text" class="search-input" placeholder="Поиск по артикулу, модели, названию" value="' . get_search_query() . '" name="s">
			<button><img src="' . get_template_directory_uri() . '/images/search.svg" alt=""></button>
			<input type="hidden" name="post_type" value="product">
		</form>
	';
	return $form;
}

add_action('template_redirect', 'use_parent_category_template');
function use_parent_category_template() {
 global $cat, $post;
 $category = get_category($cat);

 if (is_category()): 
   while ($category->cat_ID) {
     if ( file_exists(TEMPLATEPATH . "/category-" . $category->cat_ID . '.php') ) {
       include(TEMPLATEPATH . "/category-" . $category->cat_ID . '.php');
       exit;
     }
     $category = get_category($category->category_parent);
   }
   elseif (is_single()) :

     $categories = get_the_category($post->ID);

   if (count($categories)) foreach ( $categories as $category ) {
     while ($category->cat_ID) {
       if ( file_exists(TEMPLATEPATH . "/single-" . $category->cat_ID . '.php') ) {
         include(TEMPLATEPATH . "/single-" . $category->cat_ID . '.php');
         exit;
       }

       $category = get_category($category->category_parent);
     }
     
   }

   endif;
}

add_action('wp_ajax_nopriv_get_promo', 'get_promo');
add_action('wp_ajax_get_promo', 'get_promo');
function get_promo() {
	$nonce = isset($_POST['nonce']) ? $_POST['nonce'] : '';
	if (!wp_verify_nonce($nonce, 'get_promo_nonce'))
		wp_send_json_error(
			array(
				'message' => 'Данные получены некорректно.',
				'redirect' => false
			)
		);
	
	$client_name = isset($_POST['client-name']) ? $_POST['client-name'] : false;
	$client_phone = isset($_POST['client-phone']) ? $_POST['client-phone'] : false;
	$client_email = isset($_POST['client-email']) ? $_POST['client-email'] : false;
	$client_privacy = isset($_POST['client-privacy']) ? $_POST['client-privacy'] : false;
	$login = isset($_POST['login']) ? $_POST['login'] : false;
	
	if (!$client_name || !$client_phone)
		wp_send_json_error(
			array(
				'message' => 'Одно или несколько обязательных полей не заполнено.',
				'redirect' => false
			)
		);
	/*
	if (!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $client_email))
		wp_send_json_error(
			array(
				'message' => 'Неверный формат E-mail.',
				'redirect' => false
			)
		); */
	
	if (!$client_privacy)
		wp_send_json_error(
			array(
				'message' => 'Вы должны дать согласие на обработку персональных данных.',
				'redirect' => false
			)
		);
	
	$code = strtoupper(wp_generate_password(6, false, false));
	
	// отправка в CRM
	$webhook_url_parts = array(
		'https://portal.citylombard.ru/rest/37/5n91fubvhq40qdmo/crm.lead.add',
		'?fields[TITLE]=Заявка',
		sprintf('&fields[NAME]=%s', $client_name),
		//sprintf('&fields[EMAIL][0][VALUE]=%s', $client_email),
		//'&fields[EMAIL][0][EMAIL]=WORK',
		sprintf('&fields[PHONE][0][VALUE]=+7%s', $client_phone),
		'&fields[PHONE][0][PHONE]=WORK',
		sprintf('&fields[COMMENTS]=%s', $code),
	);
		
	$webhook_url = implode('', $webhook_url_parts);
		
	wp_remote_get($webhook_url);
	
	setcookie('promocode', $code, time() + 3600 * 24 * 30, '/');
	
	$content = '
		<div class="promocode-container">
			<div class="promocode-inner">
                <div class="ty">
                    <p>Благодарим Вас за обращение </p>
                    <p>Чтобы воспользоваться промокодом просто сфотографируйте его и покажите фотографию
                    в отделении.</p>
                    <p class="hot">Промокод:<i>' . $code . '</i></p>
                    <p>Срок действия промокода - 24 часа</p>
                    <div class="calc-button popup_close-js">Закрыть</div>
                </div>
			</div>
		</div>
	';
	
	// Уведомление клиента
	$subject = 'Вы получили промокод на сайте ' . site_url();
	$headers = 'Content-type: text/html; charset="utf-8"';
	$mailBody = '<h4>Добрый день.</h4>';
	$mailBody .= '<p>Вы произвели оценку на сайте <a href="' . site_url() . '">' . site_url() . '</a> и получили промокод.</p>';
	$mailBody .= '<p>Ваш промокод:</p>';
	$mailBody .= '<h2>' . $code . '</h2>';
	$mailBody .= '<hr>';
	$mailBody .= '<p><em>Если Вы этого не делали, то просто проигнорируйте это письмо.</em></p>';
	wp_mail($client_email, $subject, $mailBody, $headers);
	
	// Уведомление администратора
	//$admin_email = get_option('admin_email');
	$admin_email = 'promo@citylombard.ru';
	$subject = 'Заявка на рассчет и промокод на сайте ' . site_url();
	$headers = 'Content-type: text/html; charset="utf-8"';
	$mailBody = '<h4>Подробности:</h4>';
	$mailBody .= '<p>Имя: ' . $client_name . '</p>';
	$mailBody .= '<p>Телефон: ' . $client_phone . '</p>';
	$mailBody .= '<p>E-mail: ' . $client_email . '</p>';
	$mailBody .= '<p>Промокод:</p>';
	$mailBody .= '<h2>' . $code . '</h2>';
	$mailBody .= '<hr>';
	$mailBody .= '<p><em>Письмо носит информативный характер.</em></p>';
	wp_mail($admin_email, $subject, $mailBody, $headers);
	
	wp_send_json_success(
		array(
			'message' => $content,
			'title' => 'Ваш промокод',
			'redirect' => false
		)
	);
  
}

add_action('wp_ajax_nopriv_get_gold_price', 'get_gold_price');
add_action('wp_ajax_get_gold_price', 'get_gold_price');
function get_gold_price() {
	// цена в рублях за 1 грамм золота * пробу * маржу
	$cost = round(get_current_gold_price() * 0.585 * 0.96, 0);

	wp_send_json_success(
		array(
			'cost' => $cost,
		)
	);
}