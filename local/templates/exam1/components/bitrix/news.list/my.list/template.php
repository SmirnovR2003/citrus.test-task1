<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<div class="news-list">
    <? foreach ($arResult["ITEMS"] as $arItem) : ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="review-block" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="review-text">
                <div class="review-block-title">
                    <span class="review-block-name">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a>
                    </span>
                    <span class="review-block-description">
                        <?= $arItem["DISPLAY_ACTIVE_FROM"] . ", " 
                            . $arItem["PROPERTIES"]["POSITION"]["VALUE"] . ", " 
                            . $arItem["PROPERTIES"]["COMPANY"]["VALUE"] ?>
                    </span>
                </div>

                <div class="review-text-cont">
                    <?=$arItem["PREVIEW_TEXT"]; ?>
                </div>

                <? if (isset($arItem["PREVIEW_PICTURE"]) && is_array($arItem["PREVIEW_PICTURE"])) : ?>
                    <div style="clear: both;" class="review-img-wrap">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>" height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" />
                    </div>
                <? else : ?>
                    <div style="clear: both;" class="review-img-wrap">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img src="<?= SITE_TEMPLATE_PATH . "/img/rew/no_photo.jpg" ?>" alt="img"></a>
                    </div>
                <? endif ?>
            </div>
        </div>
    <? endforeach; ?>
    <?= $arResult["NAV_STRING"] ?>
</div>