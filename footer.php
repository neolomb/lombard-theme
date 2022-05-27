<?php /** * The template for displaying the footer. * * Contains the closing of the id=main div and all content * after. Calls sidebar-footer.php for bottom widgets. * * @package WordPress * @subpackage Twenty_Ten * @since Twenty Ten 1.0 */ ?>
    </div>
</div>
<footer class="footer">
   <div class="wrap">
      <div class="footer-top">
         <div class="footer-column">
            <a class="footer-logo" href="<?php echo home_url('/'); ?>">
            <img src="<?php the_field('logo_footer', 'option'); ?>" alt="Ломбард 24">
            </a>
            <a class="footer-tel" href="tel:<?php the_field('phone', 'option'); ?>">
               <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.6174 13.6089C15.9971 12.9839 14.4948 12.0718 13.7658 11.7042C12.8166 11.2261 12.7385 11.187 11.9924 11.7413C11.4948 12.1113 11.1639 12.4417 10.5815 12.3175C9.99905 12.1933 8.73343 11.4929 7.62522 10.3882C6.51702 9.28353 5.776 7.98118 5.6514 7.40072C5.52679 6.82025 5.86272 6.49329 6.22913 5.99447C6.74554 5.29134 6.70647 5.17415 6.26507 4.22493C5.92093 3.48665 4.98225 1.99837 4.35491 1.38118C3.68382 0.718293 3.68382 0.835481 3.2514 1.01517C2.89935 1.16329 2.56161 1.34334 2.24241 1.55306C1.61741 1.96829 1.27054 2.31322 1.02796 2.83157C0.78538 3.34993 0.676396 4.56517 1.92913 6.84095C3.18186 9.11673 4.06077 10.2804 5.87991 12.0945C7.69905 13.9085 9.09788 14.8839 11.1428 16.0308C13.6725 17.4476 14.6428 17.1714 15.1627 16.9292C15.6826 16.687 16.0291 16.3433 16.4451 15.7183C16.6554 15.3996 16.8359 15.0623 16.9842 14.7105C17.1643 14.2796 17.2815 14.2796 16.6174 13.6089Z"
                     stroke="white" stroke-width="1.4" stroke-miterlimit="10"/>
               </svg>
               <?php the_field('phone', 'option'); ?>
            </a>
            <a class="footer-mail" href="mailto:<?php the_field('mail', 'option'); ?>">
               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14 15.5008H2C1.60218 15.5008 1.22064 15.3428 0.93934 15.0614C0.658035 14.7801 0.5 14.3986 0.5 14.0008V5.78754C0.512468 5.53962 0.585334 5.29851 0.712259 5.08518C0.839183 4.87186 1.01632 4.69278 1.22825 4.56354L7.22825 0.96354C7.46129 0.823808 7.72791 0.75 7.99963 0.75C8.27135 0.75 8.53796 0.823808 8.771 0.96354L14.771 4.56354C15.2218 4.83579 15.4985 5.32329 15.5 5.84979V14.0008C15.5 14.3986 15.342 14.7801 15.0607 15.0614C14.7794 15.3428 14.3978 15.5008 14 15.5008ZM2 6.40179V14.0008H14V6.40179L8 10.4015L2 6.40179ZM8 2.24979L2.987 5.25729L8 8.59929L13.0123 5.25729L8 2.24979Z"
                     fill="white"/>
               </svg>
               <?php the_field('mail', 'option'); ?>
            </a>
         </div>
         <div class="footer-column">
            <?php if (is_front_page()) { ?>
            <a class="footer-link" href="#main">Главный экран</a>
            <a class="footer-link" href="#what">Что мы принимаем</a>
            <a class="footer-link" href="#price">Как мы оцениваем</a>
            <a class="footer-link" href="#calculator">Калькулятор оценки</a>
            <?php } else { ?>
            <a class="footer-link" href="<?php echo home_url('/'); ?>#main">Главный экран</a>
            <a class="footer-link" href="<?php echo home_url('/'); ?>#what">Что мы принимаем</a>
            <a class="footer-link" href="<?php echo home_url('/'); ?>#price">Как мы оцениваем</a>
            <a class="footer-link" href="<?php echo home_url('/'); ?>#calculator">Калькулятор оценки</a>
            <?php } ?>
         </div>
         <div class="footer-column">
            <?php if (is_front_page()) { ?>
			<a class="footer-link" href="<?php print get_page_link(329); ?>">Наши услуги</a>
            <a class="footer-link" href="#why">Почему именно мы</a>
            <a class="footer-link" href="<?php print get_page_link(103); ?>">Наши отделения</a>
            <a class="footer-link" href="https://lk.neolombard.ru/">Личный кабинет</a>
            <?php } else { ?>
			<a class="footer-link" href="<?php print get_page_link(329); ?>">Наши услуги</a>
            <a class="footer-link" href="<?php echo home_url('/'); ?>#why">Почему именно мы</a>
            <a class="footer-link" href="<?php print get_page_link(103); ?>">Наши отделения</a>
            <a class="footer-link" href="https://lk.neolombard.ru/">Личный кабинет</a> 
            <?php } ?>
         </div>
         <div class="footer-column footer-payment">
            <div class="footer-payment__title">Принимаем к оплате:</div>
            <div class="footer-payment__image">
               <img src="<?php the_field('payment-img', 'option'); ?>" alt="Методы оплаты">
            </div>
         </div>
      </div>
      <div class="footer-about">
         <?php the_field('copy', 'option'); ?>
      </div>
   </div>
   <div class="footer-bottom">
      <div class="wrap footer-bottom__wrap">
         <div class="footer-bottom__copy">© ООО «Неоломбард»</div>
         <div class="footer-bottom__links">
            <?php wp_nav_menu('theme_location=footer&container='); ?>
         </div>
      </div>
   </div>
</footer>
</div>
<div class="mewse">
   <div class="close-mewse">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M16 1.61143L14.3886 0L8 6.38857L1.61143 0L0 1.61143L6.38857 8L0 14.3886L1.61143 16L8 9.61143L14.3886 16L16 14.3886L9.61143 8L16 1.61143Z"
            fill="#474747"/>
      </svg>
   </div>
   <p>Уважаемые клиенты, при выборе ломбарда, проверяйте, не попал ли он в черный список Центрального Банка России</p>
   <p><a href="https://cbr.ru/inside/warning-list/" target="_blank" class="btn-blu">Подробнее</a></p>
</div>


<?php wp_footer(); ?>

<style>
   .map_desc {
   max-width: 70vw;
   }
   ymaps.ymaps-2-1-77-svg-icon {
   display: none !important;
   }
   #map {
	   position: relative;
   }
   #map>ymaps {
	   position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
   }
   .item-adres {
	   flex-wrap: wrap
   }
   .item-adres .b-block {
	   width: 100%;
	   padding-top: 15px;
   }
   .item-adres .b-block a {
		display: inline-flex;
		justify-content: center;
		align-items: center;
		text-align: center;
		padding: 23px;
		width: auto;
   }
   .item-adres .b-block a svg {
	   margin-right: 10px;
   }
   
</style>

<script>
   setTimeout(function(){
   	var elem = document.createElement('script');
   	elem.type = 'text/javascript';
   	elem.src = '//api-maps.yandex.ru/2.1/?load=package.full&lang=ru-RU&onload=getYaMap';
   	document.getElementsByTagName('body')[0].appendChild(elem);
   }, 5000);
</script>



<?php /* script>
<script src="//api-maps.yandex.ru/2.1/?load=package.full&lang=ru_RU&onload=getYaMap&apikey=0e993181-e7e8-44fe-b2b3-93173f3b7f02" type="text/javascript"></script>
	if (navigator.geolocation) {
		
		function exportPosition(position) {
			latitude = position.coords.latitude;
			longitude = position.coords.longitude;
			var point = latitude + ', ' + longitude;
			$('body').attr('data-clientcord', point)
		}

		navigator.geolocation.getCurrentPosition(exportPosition);
		
		navigator.geolocation.getCurrentPosition(
		  function(position){
			$('.item-adres .b-block').show();
		  }, function(error){
			if(error.PERMISSION_DENIED){
				$('.item-adres .b-block').remove();
			}
		});

		$(document).on('click', '.item-adres .b-block a', function(e) {
			
			e.preventDefault();
			
			var coord = $(this).attr('data-coord');
			var clientCoord = $('body').attr('data-clientcord');
			
			console.log(coord, clientCoord)

			function init () {
				
				var multiRoute = new ymaps.multiRouter.MultiRoute({
					referencePoints: [
						coord,
						clientCoord
					],
					params: {
						results: 2
					}
				}, {
					boundsAutoApply: true
				});

				var myMap = new ymaps.Map('map', {
					center: [55.746352, 37.595378],
				    zoom: 9,
				    controls: []
				}, {
					buttonMaxWidth: 300
				});
				myMap.geoObjects.add(multiRoute);
			}
			ymaps.ready(init);
			
			$("html, body").animate({ scrollTop: 0 }, "slow");
			
			return false;
		});

	} else {
		console.log('браузер не поддерживает Geolocation API');
	}
</script */ ?>
	

<script type="text/javascript">

   function getYaMap() {
   
       var YMapId = document.getElementById("yamap_div_1");
       var l_YMapId = YMapId.id;
       var l_YaMap1 = new ymaps.Map(l_YMapId, {
           center: [55.746352, 37.595378],
           type: 'yandex#map',
           zoom: 9,
           controls: []
       }, {maxZoom: 18, minZoom: 5});
   
       l_YaMap1.controls.add('zoomControl', {left: '10px'});
       l_YaMap1.controls.add('typeSelector', {});
       l_YaMap1.controls.add('fullscreenControl');
   
       var l_collection = new ymaps.GeoObjectCollection();
   
       var l_Placemark = new ymaps.Placemark([55.591432, 37.646705], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>м.Бирюлево ул. Медынская, д. 2, корп. 1, стр.2</p><b>Часы работы: </b>Пн-Сб с 10:00 до 19:00 Вс с 11:00 до 18:00<p><b>Как добраться: </b><a href="https://yandex.ru/profile/1258610626" target="_blank">посмотреть</a></p><p><a href="tel:+79253913890">+7 925 391 38 90</a></p><p><a href="tel:"></a></p><p><a href="tel:"></a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.881747, 37.488642], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>м.Ховрино ул. Маршала Федоренко, д. 12</p><b>Часы работы: </b>Пн-Пт с 10:00 до 20:00 Сб-Вс с 11:00 до 19:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfIgk1D" target="_blank">посмотреть</a></p><p><a href="tel:+79263857877">+7 926 385 78 77</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.609889, 37.716458], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>м.Домодедовская Каширское шоссе, д. 108 к. 1</p><b>Часы работы: </b>Ежедневно с 10:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfItd9A" target="_blank">посмотреть</a></p><p><a href="tel:+79295645535">+7 929 564 55 35</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.775335, 37.487477], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>м.Хорошево пр-т Маршала Жукова, д.21</p><b>Часы работы: </b>Ежедневно с 10:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfMUQhB" target="_blank">посмотреть</a></p><p><a href="tel:+79296388212">+7 929 638 82 12</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.654308, 37.758047], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>м.Марьино ул. Новомарьинская, д. 14/15</p><b>Часы работы: </b>Ежедневно с 10:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfMuS2A" target="_blank">посмотреть</a></p><p><a href="tel:+79266111303">+7 926 611 13 03</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.636724, 37.352217], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>м.Новопеределкино Боровское шоссе, д. 51, ТЦ Новопеределкино, 1 эт.</p><b>Часы работы: </b>Ежедневно с 10:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfMSoPD" target="_blank">посмотреть</a></p><p><a href="tel:+79263039643">+7 926 303 96 43</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.652578, 37.396865], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>м.Солнцево Солнцевский проспект, д. 2, корп. 3</p><b>Часы работы: </b>Ежедневно с 9:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfMHusA" target="_blank">посмотреть</a></p><p><a href="tel:+79252818272">+7 925 281 82 72</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.740107, 37.650746], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>м.Таганская Гончарный проезд, д. 8/40</p><b>Часы работы: </b>Пн-Сб с 10:00 до 20:00 Вс — выходной<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfMT-CD" target="_blank">посмотреть</a></p><p><a href="tel:+79262090383">+7 926 209 03 83</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.607887, 37.532602], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>м.Ясенево Новоясневский пр-т, д. 7, ТЦ Калита, 1 эт.</p><b>Часы работы: </b>Ежедневно с 10:00 до 21:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfMt7WB" target="_blank">посмотреть</a></p><p><a href="tel:+79296389142">+7 929 638 91 42</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.705458, 37.685458], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>м.Кожуховская ул. Трофимова 35/20</p><b>Часы работы: </b>Ежедневно с 10:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQxY0xY-D" target="_blank">посмотреть</a></p><p><a href="tel:+79256616812">+7 925 661 68 12</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.594611, 37.599130], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>м. ул. Академика Янгеля Варшавское ш., 152А</p><b>Часы работы: </b>Ежедневно с 10:00 до 21:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCUAiIhDpA" target="_blank">посмотреть</a></p><p><a href="tel:+79299766612">+7 929 976 66 12</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.617239, 37.507873], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>М. Тёплый стан, Новоясеневский проспект, вл.2Б, стр2, пом 8а</p><b>Часы работы: </b>Пн-Пт с 09:00 до 21:00, Сб-Вс  с 10:00 до 21:00<p><b>Как добраться: </b><a href="" target="_blank">посмотреть</a></p><p><a href="tel:+79256653677">+7 925 665 36 77</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.631366, 37.850074], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>г.Дзержинский Площадь Дмитрия Донского, д. 2а</p><b>Часы работы: </b>Ежедневно с 9:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfEFg9D" target="_blank">посмотреть</a></p><p><a href="tel:+79250867972">+7 925 086 79 72</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([56.336747, 37.511425], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>г.Дмитров пер. Вокзальный, д. 2</p><b>Часы работы: </b>Ежедневно с 9:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfIDItA" target="_blank">посмотреть</a></p><p><a href="tel:+79260140424">+7 926 014 04 24</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([56.341992, 37.520620], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>г.Дмитров ул. Загорская, д. 34а</p><b>Часы работы: </b>Ежедневно с 9:00 до 19:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfIXZwA" target="_blank">посмотреть</a></p><p><a href="tel:+79250943354">+7 925 094 33 54</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.981324, 37.184252], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>г.Зеленоград мкр. 9, корпус 900 ТЦ Семейный</p><b>Часы работы: </b>Ежедневно с 10:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfMe2xA" target="_blank">посмотреть</a></p><p><a href="tel:+79296809683">+7 929 680 96 83</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.796763, 38.974825], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>г.Орехово-Зуево ул. Ленина, д. 14</p><b>Часы работы: </b>Ежедневно с 9:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfMfB3B" target="_blank">посмотреть</a></p><p><a href="tel:+79299195653">+7 929 919 56 53</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.812084, 38.967085], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>г.Орехово-Зуево ул. Бирюкова, д. 41</p><b>Часы работы: </b>Ежедневно с 9:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfMCrdD" target="_blank">посмотреть</a></p><p><a href="tel:+79260554654">+7 926 055 46 54</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.431535, 37.564168], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>г.Подольск Вокзальная площадь 4а стр.2</p><b>Часы работы: </b>Ежедневно с 10:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfMga0A" target="_blank">посмотреть</a></p><p><a href="tel:+79295552983">+7 929 555 29 83</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([56.302788, 38.135896], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>г.Сергиев Посад Вокзальная площадь, д. 1</p><b>Часы работы: </b>Ежедневно с 10:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfMs0tD" target="_blank">посмотреть</a></p><p><a href="tel:+79299137519">+7 929 913 75 19</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.893870, 37.451548], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>г.Химки ул. Железнодорожная, д. 21</p><b>Часы работы: </b>Ежедневно с 9:00 до 20:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCQlfMdz0A" target="_blank">посмотреть</a></p><p><a href="tel:+79299614512">+7 929 961 45 12</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
       var l_Placemark = new ymaps.Placemark([55.751807, 38.007351], {}, {
           iconLayout: "default#image",
           iconImageHref: "<?php echo get_template_directory_uri(); ?>/images/map-locator.svg",
           iconImageSize: [35, 50],
           iconImageOffset: [-20, -40]
       });
       var x = '<div class="map_desc"><p><b>Адрес: </b>г.Балашиха Советская ул., 1Е, микрорайон Железнодорожный, Балашиха, ТЦ Атлантик</p><b>Часы работы: </b>Пн-Пт с 9:00 до 20:00 Сб-Вс с 10:00 до 19:00<p><b>Как добраться: </b><a href="https://yandex.ru/maps/-/CCUAi4QcoA" target="_blank">посмотреть</a></p><p><a href="tel:+79256653701">+7 925 665 37 01</a></p></div>';
       l_Placemark.properties.set("balloonContent", x);
       l_collection.add(l_Placemark);
   
   
       if (l_collection.getLength() > 0) {
           l_YaMap1.geoObjects.add(l_collection);
       }
   
   
       var l_LayoutBtRoute = ymaps.templateLayoutFactory.createClass('<div>{{data.content|raw}}</div>');
       var l_BtRoute = new ymaps.control.Button({
           data: {content: ''},
           options: {layout: l_LayoutBtRoute, selectOnClick: false}
       });
       l_YaMap1.controls.add(l_BtRoute, {float: 'none', position: {left: '40px', bottom: '40px'}});
       l_YaMap1.events.add('click', function (e) {
           var l_coords = e.get('coords');
           var l_restart = true;
           while (l_restart == true) {
               l_restart = false;
               l_YaMap1.geoObjects.each(function (p_geoObject) {
                   if (typeof p_geoObject.routeOptions != 'undefined') {
                       l_YaMap1.geoObjects.remove(p_geoObject);
                       l_restart = true;
                   }
                   var l_prop = p_geoObject.properties.get('clickPlacemark');
                   if (l_prop == 'yes') {
                       l_YaMap1.geoObjects.remove(p_geoObject);
                       l_restart = true;
                   }
               });
           }
           ;
           var clickPlacemark = new ymaps.Placemark(l_coords, {}, {preset: 'islands#redDotIcon'});
           clickPlacemark.properties.set('clickPlacemark', 'yes');
           l_YaMap1.geoObjects.add(clickPlacemark);
           clickPlacemark.geometry.setCoordinates(l_coords);
           clickPlacemark.properties.set('balloonContent', '');
           clickPlacemark.properties.set('hintContent', '');
           ymaps.geocode(l_coords).then(function (res) {
               var firstGeoObject = res.geoObjects.get(0);
               clickPlacemark.properties.set('balloonContent', firstGeoObject.properties.get('text'));
               clickPlacemark.properties.set('hintContent', firstGeoObject.properties.get('name'));
           });
           l_BtRoute.data.set('content', '');
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.591432, 37.646705]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#0000FF', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#0000FF";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.881747, 37.488642]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#00FF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#00FF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.609889, 37.716458]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FF0000', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FF0000";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.775335, 37.487477]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.654308, 37.758047]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.636724, 37.352217]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.652578, 37.396865]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.740107, 37.650746]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.607887, 37.532602]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.705458, 37.685458]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.594611, 37.599130]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.617239, 37.507873]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.631366, 37.850074]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [56.336747, 37.511425]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [56.341992, 37.520620]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.981324, 37.184252]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.796763, 38.974825]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.812084, 38.967085]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.431535, 37.564168]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [56.302788, 38.135896]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.893870, 37.451548]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
           ymaps.route([{
               type: 'wayPoint',
               point: clickPlacemark.geometry.getCoordinates()
           }, {type: 'wayPoint', point: [55.751807, 38.007351]}], {
               mapStateAutoApply: false,
               avoidTrafficJams: true
           }).then(function (p_route) {
               var points = p_route.getWayPoints();
               points.options.set('visible', false);
               p_route.getPaths().options.set({strokeColor: '#FFFF00', opacity: 0.5});
               l_YaMap1.geoObjects.add(p_route);
               var km = p_route.getHumanLength();
               var tm = p_route.getHumanTime();
               var x = l_BtRoute.data.get('content') + '<br><span style="color:#FFFF00";>' + km + '; ' + tm + '</span>';
               l_BtRoute.data.set('content', x);
           }, this);
       }, this);
   };
</script>
<!-- js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/counties.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/phonecode.js"></script>
<script>
   $(function () {
       $('#phone').phonecode({
           preferCo: 'ru'
       });
   });
   
</script>
<!-- js end -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css">
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo get_template_directory_uri(); ?>/css-form/form.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
<!-- js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.liLanding.js"></script>
<script>
   
</script>
<!-- js end -->
<!-- Калькулятор -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/calc/css/style.css">
<link href="<?php echo get_template_directory_uri(); ?>/assets/calc/css/jquery-ui.css" rel="stylesheet"
   type="text/css"/>
<link href="<?php echo get_template_directory_uri(); ?>/assets/calc/css/jquery-ui-slider-pips.css" rel="stylesheet"
   type="text/css"/>
<link href="<?php echo get_template_directory_uri(); ?>/assets/calc/css/select2.css" rel="stylesheet" type="text/css"/>
<!-- js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/calc/js/jquery-ui-slider-pips.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/calc/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/calc/js/select2.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/calc/js/init.js"></script>
<!-- js end -->
<!-- Калькулятор -->
<?php if (get_field('crm', 'option')) { ?>
<?php the_field('crm', 'option'); ?>
<?php } ?>
</body>
</html>