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
$this->setFrameMode(true);?>
<div class="col-lg-5 col-xs-12 hidden-print">
    <div class="input-group-search">
        <form action="<?=$arResult["FORM_ACTION"]?>">
        <input type="text" class="form-control" name="q" value="" maxlength="50" placeholder="Поиск...">
        <button class="btn btn-link" type="button"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

