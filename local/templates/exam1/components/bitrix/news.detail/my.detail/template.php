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
?>
<div class="news-detail">



	<div class="review-block">
		<div class="review-text">
			<div class="review-text-cont">
				<?= $arResult["DETAIL_TEXT"] ?>
			</div>
			<div class="review-autor">
				<?= $arResult["NAME"] . ", " . $arResult["DISPLAY_ACTIVE_FROM"] . ", "
					. $arResult["PROPERTIES"]["POSITION"]["VALUE"] . ", " . $arResult["PROPERTIES"]["COMPANY"]["VALUE"] ?>
			</div>
		</div>
		<? if (isset($arResult["DETAIL_PICTURE"]) && is_array($arResult["DETAIL_PICTURE"])) : ?>
			<div style="clear: both;" class="review-img-wrap">
				<img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>" height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>" title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>" />
			</div>
		<? else : ?>
			<div style="clear: both;" class="review-img-wrap">
				<img src="<?= SITE_TEMPLATE_PATH . "/img/rew/no_photo.jpg" ?>" alt="img">
			</div>
		<? endif ?>
	</div>

	<?
	if (isset($arResult["PROPERTIES"]["FILES"]["VALUE"]) && is_array($arResult["PROPERTIES"]["FILES"]["VALUE"])) {
		foreach ($arResult["PROPERTIES"]["FILES"]["VALUE"] as $file) {
			$file = CFile::GetFileArray($file);
			if (is_array($file))
				$arResult["FILES"][] = $file;
		}
	}


	if (isset($arResult["FILES"]) && is_array($arResult["FILES"]) && count($arResult["FILES"]) > 0) { ?>

		<div class="exam-review-doc">
			<p>Документы:</p>

		<?
		foreach ($arResult["FILES"] as $file) {
			echo "<div  class=\"exam-review-item-doc\"><img class=\"rew-doc-ico\" src=\"" . SITE_TEMPLATE_PATH
				. "/img/icons/pdf_ico_40.png\"" . "><a href=\"" . $file["SRC"] . "\" download>" . $file["ORIGINAL_NAME"]
				. "</a></div>";
		}
	} ?>
		</div>