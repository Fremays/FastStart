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

<div class="row">
    <div class="col-xs-12 col-md-9">
        <?=$arResult['FIELDS']['DETAIL_TEXT']?>
    </div>
    <div class="col-xs-12 col-md-3">
        <div class="project-participants">
            <h6><?=GetMessage("DATE_ACTIVE_FROM")?></h6>
            <span><?=$arResult['FIELDS']['DATE_ACTIVE_FROM']?></span>
        </div>
    </div>
</div>