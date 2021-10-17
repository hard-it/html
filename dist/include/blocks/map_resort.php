<section class="resort-map container">
    <div class="resort-map__wrap row">
        <div class="resort-map__left col-12 col-md-4">
            <div class="resort-map__contact">
                <div class="resort-map__contact-title">Контакты</div>
                <div class="resort-map__contact-wrap">
                    <div class="resort-map__contact-addr">
                        <div class="resort-map__contact-txt">Адрес</div>
                        <div class="resort-map__contact-marker">
                            <img src="images/dist/region/marker.png" alt="г. Кисловодск, ул. Коллективная , 4А">
                            <span>г. Кисловодск, ул. Профинтерна, 50</span>
                        </div>
                        <div class="resort-map__contact-phone">
                            <div class="resort-map__contact-txt">Телефон для бронирования</div>
                            <ul class="resort-map__contact-phone-list">
                                <li class="resort-map__contact-phone-item">
                                    <a href="tel:+78002008558" class="resort-map__contact-phone-link">
                                        <img src="images/dist/region/phone.png" alt="">
                                        <span>8 (800) 200 85 58</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="resort-map__right col-12 col-md-8">
            <div id="map" class="map" style="display:block; height:400px"></div>
            <script src="https://api-maps.yandex.ru/2.1/?apikey=2a0df51c-10bd-48d1-a39e-4b7653ebedbb&lang=ru_RU" type="text/javascript"></script>
            <script>
				ymaps.ready(function () {
					var myMap = new ymaps.Map('map', {
							center: [43.889148,42.728798],
							zoom: 17,
							controls: []
						}, {
							searchControlProvider: 'yandex#search'
						}),

						// Создаём макет содержимого.
						MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
							'<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
						),

						myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
							hintContent: 'г. Кисловодск, ул. Профинтерна, 50',
							balloonContent: '<div style="display:flex; align-items: center">' +
								'<img src="images/dist/region/resort_img.png">' +
								'<div class="marker-info" style="margin-left:10px; text-align:center">' +
								'<div>г. Ксиловодск</div>' +
								'<div style="font-weight:bold">санаторий “Плаза”</div>' +
								'' +
								'</div>' +
								'</div>'
						}, {
							// Опции.
							// Необходимо указать данный тип макета.
							iconLayout: 'default#image',
							// Своё изображение иконки метки.
							iconImageHref: 'images/dist/region/resort_marker.png',
							// Размеры метки.
							iconImageSize: [30, 42],
							// Смещение левого верхнего угла иконки относительно
							// её "ножки" (точки привязки).
							iconImageOffset: [-5, -38]
						}),

						myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
							hintContent: 'Собственный значок метки с контентом',
							balloonContent: 'А эта — новогодняя',
							iconContent: '12'
						}, {
							// Опции.
							// Необходимо указать данный тип макета.
							iconLayout: 'default#imageWithContent',
							// Своё изображение иконки метки.
							iconImageHref: 'images/ball.png',
							// Размеры метки.
							iconImageSize: [48, 48],
							// Смещение левого верхнего угла иконки относительно
							// её "ножки" (точки привязки).
							iconImageOffset: [-24, -24],
							// Смещение слоя с содержимым относительно слоя с картинкой.
							iconContentOffset: [15, 15],
							// Макет содержимого.
							iconContentLayout: MyIconContentLayout
						});

					myMap.geoObjects
						.add(myPlacemark)
				});
            </script>
        </div>
    </div>
</section>
