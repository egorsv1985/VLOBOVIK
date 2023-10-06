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
		<? // Удаляем RU_ и BY_ из названия
		$arResult["NAME"] = str_replace(array("RU_", "BY_"), "", $arResult["NAME"]);
		?>
		<h2 class="fs-32 fw-600 lh-15 text-center mb-5"><?= $arResult["NAME"]; ?></h2>
		<div class="row g-0 ">
			<? foreach ($arResult["ITEMS"] as $arItem) :
				// Проверяем, подключен ли модуль "millcom.phpthumb"
				if (CModule::IncludeModule("millcom.phpthumb")) {
					// Генерируем изображения WEBP и PNG
					$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 3);
					$arItem["PREVIEW_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 4);
				}
				// Добавляем действия для редактирования и удаления элемента
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="services__link position-relative w-100 d-block h-100">
						<? if ($arItem["PROPERTIES"]["LINK"]["VALUE"] == "") : // Проверяем, пустое ли свойство LINK 
						?>
							<? if ($arItem["DETAIL_TEXT"]) : // Если DETAIL_TEXT заполнено, то выводим модальное окно 
							?>
								<a href="#modal" type="button" class="position-relative w-100 d-block h-100" data-bs-toggle="modal" data-bs-target="#modal">
									<!-- Modal -->
									<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

													</button>
												</div>
												<div class="modal-body">
													<?= $arItem["DETAIL_TEXT"] ?>
												</div>
											</div>
										</div>
									</div>
								<? else : // Если DETAIL_TEXT пусто, то просто пустой блок 
								?>
								<? endif; ?>
							<? else : // Если свойство LINK не пусто 
							?>
								<a href="<?= $arItem["PROPERTIES"]["LINK"]["VALUE"] ?>" class="position-relative w-100 d-block h-100">
								<? endif; ?>
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
				</div>
			<? endforeach; ?>
		</div>
	</div>
</section>