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
<section class="reviews my-5 py-5" id="reviews">
	<div class="container position-relative">
		<h2 class="fs-32 lh-15 fw-600 text-center mb-5"><?= $arResult["NAME"]; ?></h2>
		<div class="swiper reviewsSwiper mb-3">
			<div class="swiper-wrapper">
				<? foreach ($arResult["ITEMS"] as $arItem) :
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
					<div class="swiper-slide p-1 d-flex flex-column ">
						<div class="swiper__top p-3 rounded-3 d-flex flex-column flex-grow-1">
							<div class="d-flex gap-4 mb-4">
								<div class="swiper__box-img d-block">
									<img src="img/icons/quotes.svg" alt="" class="d-block">
								</div>
								<div class="swiper__info d-flex flex-column">
									<div class="fs-20 fw-600"><?= $arItem["NAME"]; ?></div>
									<div class="d-block">
										<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/stars.svg" alt="stars" title="stars" class="d-block">
									</div>
								</div>
							</div>
							<div class="fs-18 lh-15 flex-grow-1">
								<?= $arItem["PREVIEW_TEXT"]; ?>
							</div>
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
