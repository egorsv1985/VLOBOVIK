<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
</main>
<footer class="footer py-5" style="background-color: #232323; color: white">
	<div class="container">
		<div class="row g-4 text-center text-sm-start">
			<div class="col-12 col-sm-6 col-lg-3">
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/logo-white.svg" alt="vlobovik" class="mw-100 h-auto mb-4">
				<div class="lh-15"><?= \Victory\Options\CVictoryOptions::getOptionValue('requisites_name_' . SITE_ID); ?></div>
				<a href="#" class="d-block"><span class="lh-15">Политика конфиденциальности</span></a>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="footer__box lh-15 ff-roboto mb-4 ps-4" style="
            background: url(<?= SITE_TEMPLATE_PATH ?>/img/icons/address-white.svg) no-repeat left top /
              14px 20px;
          ">
					<span class=""><?= \Victory\Options\CVictoryOptions::getOptionValue('address_' . SITE_ID); ?></span>
				</div>
				<div class="ff-roboto footer__box box box--time ps-4" style="
            background: url(<?= SITE_TEMPLATE_PATH ?>/img/icons/time-white.svg) no-repeat left top / 19px
              19px;
          ">
					<span class="d-block text-nowrap"><?= \Victory\Options\CVictoryOptions::getOptionValue('shedule_' . SITE_ID); ?></span>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="footer__box lh-15 ff-roboto mb-1 ps-4" style="background: url(<?= SITE_TEMPLATE_PATH ?>/img/icons/phone-white.svg) no-repeat left top / 19px 19px;">
					<?
					$A1 = \Victory\Options\CVictoryOptions::getOptionValue('A1_' . SITE_ID);
					?>
					<a href="tel:<?= str_replace(array(' ', '(', ')', '-'), '', $A1); ?>" class="footer__link link">
						<div class="ff-roboto">
							<span class="d-block text-nowrap"><?= $A1; ?> - А1</span>
						</div>
					</a>
				</div>
				<div class="footer__box lh-15 ff-roboto mb-1 ps-4">
					<?
					$MTC = \Victory\Options\CVictoryOptions::getOptionValue('MTC_' . SITE_ID);
					?>
					<a href="tel:<?= str_replace(array(' ', '(', ')', '-'), '', $MTC); ?>" class="footer__link link">
						<div class="ff-roboto">
							<span class="d-block text-nowrap"><?= $MTC; ?> - МТС</span>
						</div>
					</a>
				</div>
				<div class="footer__box lh-15 ff-roboto mt-4 d-block ps-4" style="background: url(<?= SITE_TEMPLATE_PATH ?>/img/icons/email-white.svg) no-repeat left center / 21px 14px;">
					<a href="mailto:<?= \Victory\Options\CVictoryOptions::getOptionValue('email_' . SITE_ID); ?>" class="footer__link link"><span class="lh-15"><?= \Victory\Options\CVictoryOptions::getOptionValue('email_' . SITE_ID); ?></span></a>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="text-uppercase ff-roboto mb-3"><?= GetMessage("SOCIAL") ?></div>
				<ul class="footer__social d-flex flex-column align-items-center align-items-sm-start gap-2 ff-roboto p-0 m-0">
					<li>
						<a href="<?= \Victory\Options\CVictoryOptions::getOptionValue('ig_link_' . SITE_ID); ?>">Instagram</a>
					</li>

					<li>
						<a href="<?= \Victory\Options\CVictoryOptions::getOptionValue('viber_link_' . SITE_ID); ?>">Viber</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- Modal -->
<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

				</button>
			</div>
			<div class="modal-body">
				<? $APPLICATION->IncludeComponent(
					"bitrix:iblock.element.add.form",
					"form-modal",
					array(
						"COMPONENT_TEMPLATE" => "form-modal",
						"STATUS_NEW" => "N",
						"LIST_URL" => "",
						"USE_CAPTCHA" => "N",
						"USER_MESSAGE_EDIT" => "",
						"USER_MESSAGE_ADD" => "Мы с вами скоро свяжемся",
						"DEFAULT_INPUT_SIZE" => "30",
						"RESIZE_IMAGES" => "N",
						"IBLOCK_TYPE" => "SYSTEM",
						"IBLOCK_ID" => "10",
						"PROPERTY_CODES" => array(
							0 => "9",
							1 => "NAME",
						),
						"PROPERTY_CODES_REQUIRED" => array(
							0 => "9",
							1 => "NAME",
						),
						"GROUPS" => array(
							0 => "2",
						),
						"STATUS" => "ANY",
						"ELEMENT_ASSOC" => "CREATED_BY",
						"MAX_USER_ENTRIES" => "100000",
						"MAX_LEVELS" => "100000",
						"LEVEL_LAST" => "Y",
						"MAX_FILE_SIZE" => "0",
						"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
						"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
						"SEF_MODE" => "N",
						"CUSTOM_TITLE_NAME" => "Имя",
						"CUSTOM_TITLE_TAGS" => "",
						"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
						"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
						"CUSTOM_TITLE_IBLOCK_SECTION" => "",
						"CUSTOM_TITLE_PREVIEW_TEXT" => "",
						"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
						"CUSTOM_TITLE_DETAIL_TEXT" => "",
						"CUSTOM_TITLE_DETAIL_PICTURE" => ""
					),
					false
				); ?>

			</div>
		</div>
	</div>
</div>
</body>
</html>