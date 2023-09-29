<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>
	<nav class="col-lg-9 col-xl-8 position-relative">
		<ul class="d-flex flex-column flex-lg-row justify-content-lg-between justify-content-center align-items-center gap-3 p-3 p-lg-0 fs-18 w-100">
			<?
			foreach ($arResult as $arItem) :
			?> 
			<li>
					<a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
				</li>
			<? endforeach; ?>
		</ul>
	</nav>
<? endif; ?>