<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<?if($arResult["ITEMS"]):?>
<div class="activities-description-wrap">
    <div class="activities-description">
        <div class="container">
            <div class="activities-inner">
                <h3><?=GetMessage("PAGES_VIEWED_TITLE")?></h3>
                <ul>
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                    <li><a href="<?echo $arItem["URL"]?>"><?echo $arItem["TITLE"]?></a></li>
                    <?endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?endif;?>