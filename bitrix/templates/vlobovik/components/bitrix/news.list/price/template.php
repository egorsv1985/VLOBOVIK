<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
// print_r($arResult);
?>
<section class="price my-5 py-5 position-relative" id="price">
	<div class="container">
		<h2 class="fs-32 lh-15 fw-600 text-center mb-5"><?= $arResult["NAME"]; ?></h2>
		<div class="swiper priceSwiper mb-3">
			<div class="swiper-wrapper">
				<? foreach ($arResult["ITEMS"] as $arItem) :
				if (CModule::IncludeModule("millcom.phpthumb")) {
					$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 5);
					$arItem["PREVIEW_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 6);
				}
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
					<div class="swiper-slide p-1 rounded-3">
						<div class="bg-white rounded-4 p-4 swiper__box">
							<div class="swiper__box-img mb-1">
								<picture>
									<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"]; ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"]; ?>" alt="<?= $arItem["NAME"]; ?>" title="<?= $arItem["NAME"]; ?>" class="w-100 h-auto" width="300" height="200">
								</picture>
							</div>
							<div class="fs-20 fw-600 lh-15 text-capitalize">
								<?= $arItem["NAME"]; ?>
							</div>
							<div class="lh-15 mb-4"><?= $arItem['PROPERTIES']['YEAR']['VALUE']; ?></div>
							<ul class="d-flex flex-column ps-0 m-0">
								<li class="d-flex justify-content-between mb-3 border-bottom">
									<div class="fs-18 fw-500 lh-15">Lemson</div>
									<div class="fs-18 fw-600 lh-15 text-primary"><?= $arItem['PROPERTIES']['LEMSON']['VALUE']; ?> руб.</div>
								</li>
								<li class="d-flex justify-content-between mb-3 border-bottom">
									<div class="fs-18 fw-500 lh-15">XYG</div>
									<div class="fs-18 fw-600 lh-15 text-primary"><?= $arItem['PROPERTIES']['XYG']['VALUE']; ?> руб.</div>
								</li>
								<li class="d-flex justify-content-between mb-3">
									<div class="fs-18 fw-500 lh-15">AGC</div>
									<div class="fs-18 fw-600 lh-15 text-primary"><?= $arItem['PROPERTIES']['AGC']['VALUE']; ?> руб.</div>
								</li>
							</ul>
						</div>
					</div>
				<? endforeach; ?>
			</div>
		</div>
		<div class="swiper__control d-flex justify-content-between gap-4">
			<div class="swiper-button-prev rounded-circle border-primary border"></div>
			<div class="swiper-button-next rounded-circle border-primary border"></div>
		</div>
	</div>
</section>