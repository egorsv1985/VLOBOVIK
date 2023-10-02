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
<section class="services py-5 my-5" id="services">
	<div class="container">
		<h2 class="fs-32 fw-600 lh-15 text-center mb-5"><?= $arResult["NAME"]; ?></h2>
		<div class="row g-0 ">
			<? foreach ($arResult["ITEMS"] as $arItem) :
				if (CModule::IncludeModule("millcom.phpthumb")) {
					$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 3);
					$arItem["PREVIEW_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 4);
				}
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
				<div class="col-12 col-sm-6 col-lg-3">
					<a href="#" class="services__link position-relative w-100 d-block h-100">
						<div class="services__box-img w-100 h-100 position-relative">
							<picture>
								<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"]; ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"]; ?>" alt="<?= $arItem["NAME"]; ?>" title="<?= $arItem["NAME"]; ?>" class="w-100 h-100" width="290" height="290">
							</picture>
						</div>
						<div class="fs-20 fw-700 text-white lh-15 position-absolute services__text pe-5">
							<?= $arItem["NAME"]; ?>
						</div>
					</a>
				</div>
			<? endforeach; ?>
		</div>
	</div>
</section>