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
<section class="steps my-5 py-5">
	<div class="container">
		<?
		$arResult["NAME"] = str_replace(array("RU_", "BY_"), "", $arResult["NAME"]);
		?>
		<h2 class="fs-32 lh-15 fw-600 text-center mb-5"><?= $arResult["NAME"]; ?></h2>
		<div class="row gx-5 gy-4 justify-content-between">
			<? foreach ($arResult["ITEMS"] as $arItem) :
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
				<div class="col-12 col-md-3 steps__col d-flex flex-column">
					<div class="steps__box-content d-flex flex-column flex-grow-1">
						<div class="steps__counter">
							<div class="fs-70 fw-600 lh-15"><?= $arItem['PROPERTIES']['NUM']['VALUE']; ?></div>
						</div>
						<div class="steps__box rounded-1 py-4 px-3 position-relative flex-grow-1 d-flex flex-column mh-100">
							<div class="steps__box-img mb-2">
								<img src="<?= CFile::GetPath($arItem['PROPERTIES']['ICON']['VALUE']); ?>" alt="<?= $arItem["NAME"]; ?>" title="<?= $arItem["NAME"]; ?>" class="">
							</div>
							<div class="fs-18"><?= $arItem["NAME"]; ?></div>
						</div>
					</div>
				</div>
			<? endforeach; ?>
		</div>
	</div>
</section>