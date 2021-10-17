<?php include_once __DIR__.'/include/header.php'; ?>
<div class="container" id="map-pages">
    <div class="row">
        <h1 class="sitemap-title">Страницы сайта</h1>
        <ul class="page-list">
            <li class="page-list__item">
                <a href="index.php">Главная</a>
            </li>
            <li class="page-list__item">
                <a href="region.php">Страница региона</a>
            </li>
            <li class="page-list__item">
                <a href="resort.php">Страница санатория</a>
            </li>
			<li class="page-list__item">
				<a href="select.php">Выбор санатория</a>
			</li>
			<li class="page-list__item">
				<a href="health.php">Лечение в санатории</a>
			</li>
			<li class="page-list__item">
				<a href="video.php">Видеобзоры санаториев</a>
			</li>
			<li class="page-list__item">
				<a href="faq.php">FAQ</a>
			</li>
			<li class="page-list__item">
				<a href="resorts.php">Курорты</a>
			</li>
			<li class="page-list__item">
				<a href="colaborate.php">Сотрудничество</a>
			</li>
			<li class="page-list__item">
				<a href="colaborate_item.php">Сотрудничество турагентам</a>
			</li>
			<li class="page-list__item">
				<a href="thematic_tours.php">Тематические туры</a>
			</li>
			<li class="page-list__item">
				<a href="special.php">Спецпредложения</a>
			</li>
        </ul>
    </div>
</div>
<style>
    #map-pages{
        margin: 20px auto;
    }
    .sitemap-title{
        width: 100%;
        text-align: center;
    }
</style>
<? include_once __DIR__.'/include/blocks/subscribe.php'; ?>
<? include_once __DIR__.'/include/blocks/bottom_menu.php'; ?>
<? include_once __DIR__.'/include/blocks/callback.php'; ?>
<?php include_once __DIR__.'/include/footer.php'; ?>
