<h1 class="page-title yellow container">Подбор санатория</h1>
<section class="select-wrap container">
    <? include_once __DIR__.'/blocks/select_form.php'; ?>
    <div class="select-content row">
        <div class="select-sidebar col-12 col-sm-4 col-md-3">
            <form action="" class="select-sidebar__form">
                <div class="select-sidebar__row">
                    <ul class="select-sidebar__list">
                        <li class="select-sidebar__item">
                            <span class="select-sidebar__btn yellow">Гости рекомендуют</span>
                        </li>
                        <li class="select-sidebar__item">
                            <span class="select-sidebar__btn white">Выбрать курорт</span>
                        </li>
                        <li class="select-sidebar__item">
                            <span class="select-sidebar__btn white">Выбрать санаторий</span>
                        </li>
                    </ul>
                </div>
                <div class="select-sidebar__row">
                    <ul class="select-sidebar__list">
                        <li class="select-sidebar__item">
                            <input type="radio" id="test-1" name="test" class="select-sidebar__check">
                            <label for="test-1" class="select-sidebar__lbl"></label>
                            <span class="select-sidebar__txt">Отдых с лечением</span>
                        </li>
                        <li class="select-sidebar__item">
                            <input type="radio" id="test-2" name="test" class="select-sidebar__check">
                            <label for="test-2" class="select-sidebar__lbl"></label>
                            <span class="select-sidebar__txt">Отдых без лечения</span>
                        </li>
                        <li class="select-sidebar__item">
                            <input type="radio" id="test-3" name="test" class="select-sidebar__check" checked>
                            <label for="test-3" class="select-sidebar__lbl"></label>
                            <span class="select-sidebar__txt">Отдых с детьми</span>
                        </li>
                        <li class="select-sidebar__item">
                            <input type="radio" id="test-4" name="test" class="select-sidebar__check">
                            <label for="test-4" class="select-sidebar__lbl"></label>
                            <span class="select-sidebar__txt">Косметология и SPA</span>
                        </li>
                    </ul>
                </div>
				<div class="select-sidebar__row">
					<div class="select-sidebar__title">Уровень Санатория</div>
					<ul class="select-sidebar__list">
						<li class="select-sidebar__item">
							<input type="radio" id="test2-1" name="test2" class="select-sidebar__check">
							<label for="test2-1" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Эконом</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test2-2" name="test2" class="select-sidebar__check">
							<label for="test2-2" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Средний</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test2-3" name="test2" class="select-sidebar__check" checked>
							<label for="test2-3" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Комфорт</span>
						</li>
						<li class="select-sidebar__item wrap">
							<span class="select-sidebar__txt gray">Цена, руб.</span>
							<div class="select-sidebar__wrap">
								<div class="select-sidebar__wrap-row">
									<span class="select-sidebar__wrap-row-txt">От</span>
									<span class="select-sidebar__wrap-row-txt">До</span>
								</div>
								<div class="select-sidebar__wrap-row">
									<input type="text" class="left" value="0">
									<input type="text" class="right" value="22000">
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="select-sidebar__row">
					<div class="select-sidebar__title">Дополнительно</div>
					<ul class="select-sidebar__list">
						<li class="select-sidebar__item">
							<input type="radio" id="test3-1" name="test3" class="select-sidebar__check">
							<label for="test3-1" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Бассейн</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test3-2" name="test3" class="select-sidebar__check">
							<label for="test3-2" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Шведский стол</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test3-3" name="test3" class="select-sidebar__check">
							<label for="test3-3" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Меню-заказ</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test3-4" name="test3" class="select-sidebar__check">
							<label for="test3-4" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Парковка</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test3-5" name="test3" class="select-sidebar__check">
							<label for="test3-5" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Детская комната</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test3-6" name="test3" class="select-sidebar__check">
							<label for="test3-6" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">СПА-салон</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test3-7" name="test3" class="select-sidebar__check">
							<label for="test3-7" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Wi-Fi</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test3-8" name="test3" class="select-sidebar__check">
							<label for="test3-8" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Тренажёрный зал</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test3-9" name="test3" class="select-sidebar__check">
							<label for="test3-9" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Теннисный корт</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test3-10" name="test3" class="select-sidebar__check">
							<label for="test3-10" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Размещение с животными</span>
						</li>
					</ul>
				</div>
				<div class="select-sidebar__row">
					<div class="select-sidebar__title">Профили лечения</div>
					<ul class="select-sidebar__list">
						<li class="select-sidebar__item">
							<input type="radio" id="test4-1" name="test4" class="select-sidebar__check">
							<label for="test4-1" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Общее оздоровление</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test4-2" name="test4" class="select-sidebar__check">
							<label for="test4-2" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Органы дыхания</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test4-3" name="test4" class="select-sidebar__check">
							<label for="test4-3" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Сердечно-сосудистые</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test4-4" name="test4" class="select-sidebar__check">
							<label for="test4-4" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Нервная система</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test4-5" name="test4" class="select-sidebar__check">
							<label for="test4-5" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Лёгкие</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test4-6" name="test4" class="select-sidebar__check">
							<label for="test4-6" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Желудок</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test4-7" name="test4" class="select-sidebar__check">
							<label for="test4-7" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Печень</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test4-8" name="test4" class="select-sidebar__check">
							<label for="test4-8" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Сахарный диабет</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test4-9" name="test4" class="select-sidebar__check">
							<label for="test4-9" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Гинекология</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test4-10" name="test4" class="select-sidebar__check">
							<label for="test4-10" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Опорно-двигательный</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test4-11" name="test4" class="select-sidebar__check">
							<label for="test4-11" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Аллергия</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test4-12" name="test4" class="select-sidebar__check">
							<label for="test4-12" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Кожные заболевания</span>
						</li>
						<li class="select-sidebar__item">
							<input type="radio" id="test4-13" name="test4" class="select-sidebar__check">
							<label for="test4-13" class="select-sidebar__lbl"></label>
							<span class="select-sidebar__txt">Органы дыхания</span>
						</li>
					</ul>
				</div>
            </form>
        </div>
        <div class="select-list col-12 col-md-9">
			<div class="select-list__item">
				<div class="select-list__item-slider">
					<img src="images/dist/select/resort.png" alt="Санаторий 'Плаза'">
				</div>
				<div class="select-list__item-desc">
					<div class="select-list__item-title">Санаторий "Плаза"</div>
					<ul class="select-list__item-options">
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rating">Рейтинг:</span>
								<span class="select-list__item-opt-cnt">3.8</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl reviews">Отзывы:</span>
								<span class="select-list__item-opt-cnt">45</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rooms">Посмотреть номера</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="select-list__item-bron">
					<div class="select-list__item-bron-price">Цена от <span>4400</span> ₽</div>
					<div class="select-list__item-bron-btn">Забронировать</div>
				</div>
			</div>
			<div class="select-list__item">
				<div class="select-list__item-slider">
					<img src="images/dist/select/resort.png" alt="Санаторий 'Плаза'">
				</div>
				<div class="select-list__item-desc">
					<div class="select-list__item-title">Санаторий "Плаза"</div>
					<ul class="select-list__item-options">
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rating">Рейтинг:</span>
								<span class="select-list__item-opt-cnt">3.8</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl reviews">Отзывы:</span>
								<span class="select-list__item-opt-cnt">45</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rooms">Посмотреть номера</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="select-list__item-bron">
					<div class="select-list__item-bron-price">Цена от <span>4400</span> ₽</div>
					<div class="select-list__item-bron-btn">Забронировать</div>
				</div>
			</div>
			<div class="select-list__item">
				<div class="select-list__item-slider">
					<img src="images/dist/select/resort.png" alt="Санаторий 'Плаза'">
				</div>
				<div class="select-list__item-desc">
					<div class="select-list__item-title">Санаторий "Плаза"</div>
					<ul class="select-list__item-options">
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rating">Рейтинг:</span>
								<span class="select-list__item-opt-cnt">3.8</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl reviews">Отзывы:</span>
								<span class="select-list__item-opt-cnt">45</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rooms">Посмотреть номера</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="select-list__item-bron">
					<div class="select-list__item-bron-price">Цена от <span>4400</span> ₽</div>
					<div class="select-list__item-bron-btn">Забронировать</div>
				</div>
			</div>
			<div class="select-list__item">
				<div class="select-list__item-slider">
					<img src="images/dist/select/resort.png" alt="Санаторий 'Плаза'">
				</div>
				<div class="select-list__item-desc">
					<div class="select-list__item-title">Санаторий "Плаза"</div>
					<ul class="select-list__item-options">
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rating">Рейтинг:</span>
								<span class="select-list__item-opt-cnt">3.8</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl reviews">Отзывы:</span>
								<span class="select-list__item-opt-cnt">45</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rooms">Посмотреть номера</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="select-list__item-bron">
					<div class="select-list__item-bron-price">Цена от <span>4400</span> ₽</div>
					<div class="select-list__item-bron-btn">Забронировать</div>
				</div>
			</div>
			<div class="select-list__item">
				<div class="select-list__item-slider">
					<img src="images/dist/select/resort.png" alt="Санаторий 'Плаза'">
				</div>
				<div class="select-list__item-desc">
					<div class="select-list__item-title">Санаторий "Плаза"</div>
					<ul class="select-list__item-options">
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rating">Рейтинг:</span>
								<span class="select-list__item-opt-cnt">3.8</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl reviews">Отзывы:</span>
								<span class="select-list__item-opt-cnt">45</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rooms">Посмотреть номера</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="select-list__item-bron">
					<div class="select-list__item-bron-price">Цена от <span>4400</span> ₽</div>
					<div class="select-list__item-bron-btn">Забронировать</div>
				</div>
			</div>
			<div class="select-list__item">
				<div class="select-list__item-slider">
					<img src="images/dist/select/resort.png" alt="Санаторий 'Плаза'">
				</div>
				<div class="select-list__item-desc">
					<div class="select-list__item-title">Санаторий "Плаза"</div>
					<ul class="select-list__item-options">
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rating">Рейтинг:</span>
								<span class="select-list__item-opt-cnt">3.8</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl reviews">Отзывы:</span>
								<span class="select-list__item-opt-cnt">45</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rooms">Посмотреть номера</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="select-list__item-bron">
					<div class="select-list__item-bron-price">Цена от <span>4400</span> ₽</div>
					<div class="select-list__item-bron-btn">Забронировать</div>
				</div>
			</div>
			<div class="select-list__item">
				<div class="select-list__item-slider">
					<img src="images/dist/select/resort.png" alt="Санаторий 'Плаза'">
				</div>
				<div class="select-list__item-desc">
					<div class="select-list__item-title">Санаторий "Плаза"</div>
					<ul class="select-list__item-options">
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rating">Рейтинг:</span>
								<span class="select-list__item-opt-cnt">3.8</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl reviews">Отзывы:</span>
								<span class="select-list__item-opt-cnt">45</span>
							</a>
						</li>
						<li class="select-list__item-opt">
							<a href="" class="select-list__item-opt-link">
								<span class="select-list__item-opt-lbl rooms">Посмотреть номера</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="select-list__item-bron">
					<div class="select-list__item-bron-price">Цена от <span>4400</span> ₽</div>
					<div class="select-list__item-bron-btn">Забронировать</div>
				</div>
			</div>
            <? include_once __DIR__.'/blocks/pagination.php'; ?>
        </div>
    </div>
</section>
<? include_once __DIR__.'/blocks/app.php'; ?>
<? include_once __DIR__.'/blocks/russia-resorts.php'; ?>
<? include_once __DIR__.'/blocks/subscribe.php'; ?>
<? include_once __DIR__.'/blocks/bottom_menu.php'; ?>
<? include_once __DIR__.'/blocks/callback.php'; ?>