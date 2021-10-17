<?

// определение мобильного устройства
function check_mobile_device()
{
    $mobile_agent_array = array(
        'ipad',
        'iphone',
        'android',
        'pocket',
        'palm',
        'windows ce',
        'windowsce',
        'cellphone',
        'opera mobi',
        'ipod',
        'small',
        'sharp',
        'sonyericsson',
        'symbian',
        'opera mini',
        'nokia',
        'htc_',
        'samsung',
        'motorola',
        'smartphone',
        'blackberry',
        'playstation portable',
        'tablet browser'
    );
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    foreach ($mobile_agent_array as $value) {
        if (strpos($agent, $value) !== false) {
            return true;
        }
    }
    return false;
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Ваш отдых</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		  rel="stylesheet">
	<script src="js/app.min.js"></script>
	<link rel="stylesheet" href="css/app.min.css">
</head>
<body>
<?
$is_mobile_device = check_mobile_device();
if ($is_mobile_device): ?>
    <header class="header">
        <div class="header-mobile__menu">
			<ul class="header-mobile__list">
				<li class="header-mobile__item">
					<a href="tel:+78002008558" class="header-mobile__link">
						<img src="images/dist/mobile/phone.png" alt="Ваш отдых">
					</a>
				</li>
				<li class="header-mobile__item">
					<a href="/" class="header-mobile__link">
						<img src="images/dist/mobile/logo.png" alt="Ваш отдых">
					</a>
				</li>
				<li class="header-mobile__item">
					<div class="header-mobile__btn">

					</div>
				</li>
			</ul>
		</div>
		<div class="header-mobile__filter">
			<form action="#" class="header-mobile__filter-form">
				<img src="images/dist/mobile/filter-logo.png" alt="Ваш отдых">
				<div class="header-mobile__filter-region">
					<input type="text" class="header-mobile__filter-form-input" placeholder="Название курорта">
				</div>
				<div class="header-mobile__filter-resort">
					<input type="text" class="header-mobile__filter-form-input" placeholder="Санаторий">
				</div>
				<div class="header-mobile__filter-cities">
					<ul class="header-mobile__filter-cities-list">
						<li class="header-mobile__filter-cities-item">
							<a class="header-mobile__filter-cities-link" href="">КавМинВоды</a>
						</li>
						<li class="header-mobile__filter-cities-item">
							<a class="header-mobile__filter-cities-link" href="">Киcловодск</a>
						</li>
						<li class="header-mobile__filter-cities-item">
							<a class="header-mobile__filter-cities-link" href="">Ессентуки</a>
						</li>
						<li class="header-mobile__filter-cities-item">
							<a class="header-mobile__filter-cities-link" href="">Железноводск</a>
						</li>
						<li class="header-mobile__filter-cities-item">
							<a class="header-mobile__filter-cities-link" href="">Пятигорск</a>
						</li>
					</ul>
				</div>
				<div class="header-mobile__filter-btn">
					<input type="submit" class="header-mobile__filter-btn-submit" value="Выбрать">
				</div>
			</form>
		</div>
		<div class="header-mobile__submenu">
			<button class="menu-close">
				<img src="images/dist/mobile/close.png" alt="Закрыть меню">
			</button>
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Выбрать санаторий</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Курорты</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Тематические туры</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Спецпредложения</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Сотрудничество</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">О компаниии</a>
				</li>
			</ul>
		</div>
    </header>
<? else: ?>
<!-- HEADER -->
<header class="header">
	<div class="header-container container">
		<div class="header-info row">
			<div class="header-info__logo col-12 col-md-2">
				<a href="/">
					<img src="images/dist/header/logo.svg" alt="Ваш отдых">
				</a>
			</div>
			<div class="header-info__buttons col-12 col-md-6">
				<div class="header-info__row row">
					<div class="header-info__callback col-12 col-md-6">
						<div class="header-info__control col-12">
							<a class="header-info__control-link" href="#">
								<img src="images/dist/header/loop.png" alt="Контроль качества">
								<span class="header-info__control-txt">Контроль качества</span>
							</a>
						</div>
						<div class="header-info__search">
							<form action="" class="header-info__search-form">
								<input type="text" class="header-info__search-input" placeholder="Поиск...">
							</form>
						</div>
						<!--<a class="header-info__callback-link" href="#popup-callback" role="button" data-toggle="modal">Обратный звонок</a>
                        <div class="modal fade" id="popup-callback" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Обратный звонок</h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Отправить</button>
                                    </div>
                                </div>
                            </div>
                        </div>-->
					</div>
					<div class="header-info__order col-12 col-md-6">
						<div class="header-info__contacts-lang">
							<a href="/en" class="header-info__contacts-lang-link">English version</a>
						</div>
						<a class="header-info__order-link" href="#popup-order" role="button" data-toggle="modal">Забронировать
							on-line</a>
						<div class="modal fade" id="popup-order" role="dialog" aria-labelledby="myModalLabel"
							 aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Бронирование номера</h5>
										<button type="button" class="close" data-dismiss="modal">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body">
										...
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-primary">Забронировать</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-info__contacts col-12 col-md-4">
				<div class="header-info__contacts-phone">
					<a href="tel:+78002008558" class="header-info__contacts-link">8 (800) 200 85 58</a>
				</div>
				<div class="header-info__contacts-city">
					<ul class="header-info__contacts-list">
						<li class="header-info__contacts-item"><span>Кисловодск</span></li>
						<li class="header-info__contacts-item"><span>Москва</span></li>
						<li class="header-info__contacts-item"><span>Сочи</span></li>
					</ul>
				</div>
				<div class="header-info__contacts-links">
					<a class="header-info__contacts-order" href="#popup-callback" role="button" data-toggle="modal">Заказать
						звонок</a>
					<div class="modal fade" id="popup-callback" role="dialog" aria-labelledby="myModalLabel"
						 aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Заказать звонок</h5>
									<button type="button" class="close" data-dismiss="modal">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="modal-body">
									...
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary">Отправить</button>
								</div>
							</div>
						</div>
					</div>
					<a href="" class="header-info__contacts_whatsapp">
						<img src="images/dist/header/wp.svg" alt="">
        Пишите
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="header-menu">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg">
					<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1">
						<div class="navbar-toggler-icon">
							<span class="fa fa-bars" aria-hidden="true"></span>
							<span>Меню</span>
						</div>
					</button>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="#">Выбрать санаторий</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Курорты</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Тематические туры</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Спецпредложения</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Сотрудничество</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">О компаниии</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="header-filter__banner">
			<img class="header-filter__banner-img" src="images/dist/header/banner.png" alt="Ваш отдых">
		</div>
		<div class="header-filter">
			<div class="header-filter__container container">
				<div class="header-filter__wrap row">
					<form action="" class="header-filter__form">
						<div class="header-filter__region">
							<input type="text" class="" placeholder="Название курорта">
						</div>
						<div class="header-filter__resort">
							<input type="text" placeholder="Санаторий">
						</div>
						<div class="header-filter__button">
							<input type="submit" class="" value="Выбрать">
						</div>
					</form>
					<!---<div class="header-filter__params row">
                        <div class="header-filter__region col-12 col-md-4">
                            <select class="header-filter__params-select">
                                <option class="header-filter__option">Курорт</option>
                            </select>
                        </div>
                        <div class="header-filter__sanatoium col-12 col-md-4">
                            <select class="header-filter__params-select">
                                <option class="header-filter__option">Санаторий</option>
                            </select>
                        </div>
                        <div class="header-filter__search col-12 col-md-4"><span>Выбрать</span></div>
                    </div>-->
					<div class="header-filter__tags">
						<div class="header-filter-cities">
							<ul class="header-filter-cities-list">
								<li class="header-filter-cities-item">
									<a class="header-filter-cities-link" href="">КавМинВоды</a>
								</li>
								<li class="header-filter-cities-item">
									<a class="header-filter-cities-link" href="">Киcловодск</a>
								</li>
								<li class="header-filter-cities-item">
									<a class="header-filter-cities-link" href="">Ессентуки</a>
								</li>
								<li class="header-filter-cities-item">
									<a class="header-filter-cities-link" href="">Железноводск</a>
								</li>
								<li class="header-filter-cities-item">
									<a class="header-filter-cities-link" href="">Пятигорск</a>
								</li>
							</ul>
							<ul class="header-filter-cities-list">
								<li class="header-filter-cities-item">
									<a class="header-filter-cities-link" href="">Краснодарский край</a>
								</li>
								<li class="header-filter-cities-item">
									<a class="header-filter-cities-link" href="">Крым</a>
								</li>
								<li class="header-filter-cities-item">
									<a class="header-filter-cities-link" href="">Абхазия</a>
								</li>
								<li class="header-filter-cities-item">
									<a class="header-filter-cities-link" href="">Северный Кавказ</a>
								</li>
								<li class="header-filter-cities-item">
									<a class="header-filter-cities-link" href="">Подмосковье</a>
								</li>
							</ul>
						</div>
						<!--<div class="header-filter__search col-12 col-md-4">
                            <form class="header-filter__search-form" action="">
                                <input class="header-filter__search-input" type="text" placeholder="Поиск...">
                                <button class="header-filter__search-btn">
                                    <img src="images/header/search.png" alt="Поиск по сайту">
                                </button>
                            </form>
                        </div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- /END HEADER -->
<? endif; ?>



