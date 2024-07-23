<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)) : ?>

    <nav class="nav">
        <div class="inner-wrap">
            <div class="menu-block popup-wrap">
                <a href="" class="btn-menu btn-toggle"></a>
                <div class="menu popup-block">
                    <ul id="vertical-multilevel-menu">
                        <li class="main-page"><a href="/">Главная</a>
                        </li>
                        <?
                        $previousLevel = 0;
                        foreach ($arResult as $arItem) : ?>

                            <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) : ?>
                                <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
                            <? endif ?>

                            <? if ($arItem["IS_PARENT"]) : ?>

                                <? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
                                    <li><a href="<?= $arItem["LINK"] ?>" class="<? if ($arItem["SELECTED"]) : ?>root-item-selected<? else : ?>root-item<? endif ?>"><?= $arItem["TEXT"] ?></a>


                                        <ul class="root-item">
                                        <? else : ?>
                                            <li><a href="<?= $arItem["LINK"] ?>" class="parent<? if ($arItem["SELECTED"]) : ?> item-selected<? endif ?>"><?= $arItem["TEXT"] ?></a>
                                                <ul>
                                                <? endif ?>
                                                <? if (isset($arItem["PARAMS"]["TEXT_UNDER"]) && $arItem["PARAMS"]["TEXT_UNDER"] != "") { ?>
                                                    <div class="menu-text"><?= $arItem["PARAMS"]["TEXT_UNDER"] ?></div>
                                                <? } ?>

                                            <? else : ?>

                                                <? if ($arItem["PERMISSION"] > "D") : ?>

                                                    <? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
                                                        <li><a href="<?= $arItem["LINK"] ?>" class="<? if ($arItem["SELECTED"]) : ?>root-item-selected<? else : ?>root-item<? endif ?>"><?= $arItem["TEXT"] ?></a></li>
                                                    <? else : ?>
                                                        <li><a href="<?= $arItem["LINK"] ?>" <? if ($arItem["SELECTED"]) : ?> class="item-selected" <? endif ?>><?= $arItem["TEXT"] ?></a></li>
                                                    <? endif ?>

                                                

                                                <? endif ?>

                                            <? endif ?>

                                            <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

                                        <? endforeach ?>

                                        <? if ($previousLevel > 1) : //close last item tags
                                        ?>
                                            <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                                        <? endif ?>

                                                </ul>
                                                <a href="" class="btn-close"></a>
                </div>
                <div class="menu-overlay"></div>
            </div>
        </div>
    </nav>
<? endif ?>