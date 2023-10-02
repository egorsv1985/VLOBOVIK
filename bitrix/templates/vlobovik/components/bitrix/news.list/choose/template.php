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
<section class="choose py-5">
	<div class="container">
		<h2 class="fs-32 fw-600 lh-15 text-center my-5"><?= $arResult["NAME"]; ?>
		</h2>

		<div class="row gy-5">
			<div class="col-12 col-lg-4">
				<div class="choose__box-img position-relative">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/img/choose-foto.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/choose-foto.png" alt="" class="w-100 position-relative">
					</picture>
					<div class="choose__info position-absolute bg-primary px-4 py-3 rounded">
						<div class="fs-36 fw-600 text-white text-center">10</div>
						<div class="fs-20 text-white text-center"><?= GetMessage("AGE") ?></div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-8">
				<div class="row g-3 mb-5">
					<div class="col-12 col-md-6 choose__box-content">
						<div class="fs-22 fw-600 lh-13 text-secondary">
						<?= GetMessage("PROBLEMS") ?>
						</div>
					</div>
					<div class="col-12 col-md-6 choose__box-content">
						<div class="choose__box-text rounded-3 p-2 d-flex justify-content-center align-items-center">
							<span class="fs-24 fw-600 lh-13 text-primary opacity-100">
							<?= GetMessage("WORK") ?>
							</span>
						</div>
					</div>
				</div>
				<? foreach ($arResult["ITEMS"] as $arItem) :
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
					<div class="choose__content position-relative mb-2 pb-1 pe-4 pe-sm-0">
						<div class="row gx-5">
							<div class="col-12 col-md-6 choose__box-content">
								<div class="fs-18 lh-15 choose__text position-relative">
									<?= $arItem["PREVIEW_TEXT"]; ?>

								</div>
							</div>
							<div class="col-12 col-md-6 choose__box-content">
								<div class="fs-18 lh-15 choose__text position-relative">
									<?= $arItem["DETAIL_TEXT"]; ?>

								</div>
							</div>
						</div>
					</div>
				<? endforeach ?>
			</div>
		</div>
	</div>
</section>