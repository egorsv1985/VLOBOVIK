<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();


IncludeTemplateLangFile(__FILE__);

use \Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
$asset->addCss('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
$asset->addCss('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
$asset->addJs('https://code.jquery.com/jquery-3.6.0.js');
$asset->addJs('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js');

$asset->addCss('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
$asset->addJs('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');

$asset->addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css');
$asset->addJs('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.js');

$asset->addJs('https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js');

$asset->addJs(SITE_TEMPLATE_PATH . '/script.js');
if (CModule::IncludeModule("victory.options")) {
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<? if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false) : ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<? else : ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<? endif; ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon/favicon.ico">
</head>

<body>
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>

	<body>

		<div class="wrapper">
			<header class="header w-100 position-fixed">
				<div class="container">
					<div class="header__top row py-3 justify-content-between align-items-center">
						<a href="/" class="d-block d-lg-none col-6 col-sm-3">
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/logo.svg" alt="logo" class="mw-100">
						</a>
						<div class="d-none d-sm-block col-4 col-xl-3">
							<div class="ps-4 box position-relative" style="background: url(<?= SITE_TEMPLATE_PATH ?>/img/icons/address.svg) no-repeat left top / 14px 20px; ">
								<a href="#" class="ff-roboto lh-15"><?= \Victory\Options\CVictoryOptions::getOptionValue('address_' . SITE_ID); ?></a>
							</div>
						</div>
						<div class="d-none d-lg-block col-3">
							<div class="box ps-4 position-relative" style="background: url(<?= SITE_TEMPLATE_PATH ?>/img/icons/phone.svg) no-repeat left top / 19px 19px;">
								<?
								$A1 = \Victory\Options\CVictoryOptions::getOptionValue('A1_' . SITE_ID);
								?>
								<a href="tel:<?= str_replace(array(' ', '(', ')', '-'), '', $A1); ?>" class="d-block mb-1">
									<div class="ff-roboto">
										<span class="link d-inline-block text-nowrap pe-4" style="background: url(<?= SITE_TEMPLATE_PATH ?>/img/A1.png) no-repeat right center / 15px 15px;"><?= $A1; ?>
										</span>
									</div>
								</a>
								<?
								$MTC = \Victory\Options\CVictoryOptions::getOptionValue('MTC_' . SITE_ID);
								?>
								<a href="tel:<?= str_replace(array(' ', '(', ')', '-'), '', $MTC); ?>" class="d-block">
									<div class="ff-roboto">
										<span class="link d-inline-block text-nowrap pe-4" style="background: url(<?= SITE_TEMPLATE_PATH ?>/img/MTC.png) no-repeat right center / 15px 15px;"><?= $MTC; ?>
										</span>
									</div>
								</a>
							</div>
						</div>
						<div class="d-none d-lg-block col-2 col-md-3">
							<div class="ps-4" style="background: url(<?= SITE_TEMPLATE_PATH ?>/img/icons/time.svg) no-repeat left top / 19px 19px;">
								<div class="ff-roboto">
									<span class="d-block">
										<?= \Victory\Options\CVictoryOptions::getOptionValue('shedule_' . SITE_ID); ?>
									</span>
								</div>
							</div>
						</div>
						<div class="col-2 col-md-1">
							<div class="header__language language w-100 mb-2">
								<div class="language__current text-end pe-2">рус</div>
								<ul class="language__options ff-roboto end-0 gap-1 py-1 px-2">
									<li data-lang="рус">рус</li>
									<li data-lang="бел">бел</li>
								</ul>
							</div>
							<ul class="d-flex align-items-center justify-content-between p-0 m-0 gap-1">
								<li>
									<a href="<?= \Victory\Options\CVictoryOptions::getOptionValue('viber_link_' . SITE_ID); ?>" class="">
										<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/viber.svg" alt="instagram" class="">
									</a>
								</li>
								<li>
									<a href="<?= \Victory\Options\CVictoryOptions::getOptionValue('ig_link_' . SITE_ID); ?>" class="">
										<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/instagram.svg" alt="instagram" class="">
									</a>
								</li>
							</ul>
						</div>
						<button class="col-1 col-md-2 d-block d-lg-none burger button" type="button">
							<span class="burger__inner position-relative w-100 h-100 d-flex justify-content-center align-items-center">
								<span></span>
							</span>
						</button>
					</div>
					<div class="py-3 row justify-content-between">
						<a href="/" class="d-none d-lg-block col-6 col-lg-3 ">
							<img src="<?= SITE_TEMPLATE_PATH ?>//img/icons/logo.svg" alt="logo" class="mw-100">
						</a>
						<? $APPLICATION->IncludeComponent(
							"bitrix:menu",
							"main",
							array(
								"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
								"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
								"DELAY" => "N",	// Откладывать выполнение шаблона меню
								"MAX_LEVEL" => "1",	// Уровень вложенности меню
								"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
								"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
								"MENU_CACHE_TYPE" => "N",	// Тип кеширования
								"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
								"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
								"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
								"COMPONENT_TEMPLATE" => ".default"
							),
							false
						); ?>

					</div>
				</div>
			</header>
			<main>
				<section class="promo py-5">
					<div class="container position-relative">
						<div class="row mb-4 pt-4">
							<div class="col-12 col-lg-7">
								<h1 class="fs-40 lh-15 text-uppercase fw-700 ">
									<?= \Victory\Options\CVictoryOptions::getOptionValue('promo_h1_' . SITE_ID); ?>
								</h1>
							</div>
						</div>
						<div class="promo__triangle"></div>
						<div class="promo__box">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/img/main.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/main.png" alt="" class="w-100 h-auto">
							</picture>
							<div class="line--frontal position-absolute">
								<div class="promo__line line position-relative">
									<div class="lh-15 line__info position-absolute"><?= GetMessage("FRONTAL") ?></div>
								</div>
							</div>
							<div class="line--side position-absolute">
								<div class="line position-relative">
									<div class="lh-15 line__info position-absolute"><?= GetMessage("SIDE") ?></div>
								</div>
							</div>
							<div class="line--back position-absolute">
								<div class="line position-relative">
									<div class="lh-15 line__info position-absolute"><?= GetMessage("BACK") ?></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-8 col-lg-5 col-xl-4">
								<div class="promo__box-form rounded-3 py-4 px-5">
									<? $APPLICATION->IncludeComponent(
										"bitrix:iblock.element.add.form",
										"promo-form",
										array(
											"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
											"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
											"CUSTOM_TITLE_DETAIL_PICTURE" => "",
											"CUSTOM_TITLE_DETAIL_TEXT" => "",
											"CUSTOM_TITLE_IBLOCK_SECTION" => "",
											"CUSTOM_TITLE_NAME" => "Введите имя",
											"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
											"CUSTOM_TITLE_PREVIEW_TEXT" => "",
											"CUSTOM_TITLE_TAGS" => "",
											"DEFAULT_INPUT_SIZE" => "30",
											"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
											"ELEMENT_ASSOC" => "CREATED_BY",
											"GROUPS" => array(
												0 => "2",
											),
											"IBLOCK_ID" => "1",
											"IBLOCK_TYPE" => "SYSTEM",
											"LEVEL_LAST" => "Y",
											"LIST_URL" => "",
											"MAX_FILE_SIZE" => "0",
											"MAX_LEVELS" => "100000",
											"MAX_USER_ENTRIES" => "100000",
											"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
											"PROPERTY_CODES" => array(
												0 => "1",
												1 => "NAME",
											),
											"PROPERTY_CODES_REQUIRED" => array(
												0 => "1",
												1 => "NAME",
											),
											"RESIZE_IMAGES" => "N",
											"SEF_MODE" => "N",
											"STATUS" => "ANY",
											"STATUS_NEW" => "N",
											"USER_MESSAGE_ADD" => "Спасибо, Ваша заявка успешно сохранена",
											"USER_MESSAGE_EDIT" => "Спасибо, Ваша заявка успешно сохранена!",
											"USE_CAPTCHA" => "N",
											"COMPONENT_TEMPLATE" => "promo-form"
										),
										false
									); ?>
								</div>
							</div>
						</div>
					</div>
				</section>