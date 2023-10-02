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
<section class="faq py-5 my-5 bg-light">
	<div class="container">
		<h2 class="fs-32 fw-600 lh-15 text-center mb-5"><?= $arResult["NAME"]; ?></h2>
		<div class="accordion" id="faqAccordion">
			<?
			$counter = 1;
			foreach ($arResult['ITEMS'] as $key => $arItem) :
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
				<div class="card mb-4 rounded-3">
					<div class="card-header py-3 px-4" id="heading-<?= $counter ?>">
						<h2 class="mb-0">
							<button class="card__btn fw-700 fs-24 ps-0 w-100 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $counter ?>" aria-expanded="<?= $key ? 'false' : 'true' ?>" aria-controls="collapse-<?= $counter ?>">
								<span class="fs-20 fw-500 lh-15 pe-4 position-relative d-block w-100"><?= $arItem["NAME"]; ?></span>

								<span class="faq__box-circle rounded-circle bg-primary d-block position-absolute">
								</span>
							</button>
						</h2>
					</div>

					<div id="collapse-<?= $counter ?>" class="collapse <?= $key ? '' : ' show' ?> " aria-labelledby="heading-<?= $counter ?>" data-parent="#faqAccordion">
						<div class="card-body py-2 px-4">
							<div class="fs-18 lh-15"><?= $arItem["PREVIEW_TEXT"]; ?></div>

						</div>
					</div>
				</div>
				<? $counter++; ?>
			<? endforeach; ?>
		</div>
	</div>
</section>