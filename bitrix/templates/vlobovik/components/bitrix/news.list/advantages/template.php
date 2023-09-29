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
<section class="advantages position-relative">
	<div class="container">
		<div class="row gy-4 rounded-4  px-5 pt-4 pb-5 bg-white">
			<? foreach ($arResult["ITEMS"] as $arItem) :
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
				<div class="col-12 col-sm-6 col-lg-3 d-flex gap-3 align-items-center" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<div class="advantages__box-icon">
						<img src="<?= CFile::GetPath($arItem['PROPERTIES']['ICON']['VALUE']); ?>" alt="<?= $arItem["NAME"]; ?>" class="w-100 h-auto" width="68" height="68">
					</div>
					<div class="fs-18"><?= $arItem["NAME"]; ?></div>
				</div>
			<? endforeach; ?>