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
?>
<section class="portfolio my-5 py-5" id="portfolio">
	<div class="container position-relative">
		<h2 class="fs-32 fw-600 lh-15 text-center mb-4"><?= $arResult["NAME"]; ?></h2>
		<div class="swiper portfolioSwiper mb-3">
			<div class="swiper-wrapper">
				<? foreach ($arResult["ITEMS"] as $arItem) :
				if (CModule::IncludeModule("millcom.phpthumb")) {
					$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 7);
					$arItem["PREVIEW_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 8);
				}
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
					<div class="swiper-slide">
						<div class="swiper__box-img d-block">
							<picture>
								<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"]; ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"]; ?>" alt="<?= $arItem["NAME"]; ?>" title="<?= $arItem["NAME"]; ?>" class="d-block w-100 h-100" width="388" height="314">
							</picture>
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