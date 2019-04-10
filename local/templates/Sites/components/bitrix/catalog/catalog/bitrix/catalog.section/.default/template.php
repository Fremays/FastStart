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
<div class="portfolio">
	<div class="row" data-height="equal" data-target=".thumbnail">
	<?foreach($arResult["ITEMS"] as $arElement):?>
	<?
	$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
	?>
		<div class="col-md-4 col-sm-6 col-xs-12" id="<?=$this->GetEditAreaId($arElement['ID']);?>">
			<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="thumbnail">
				<div class="image">
					<img class="img-circle img-responsive" src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arElement["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arElement["PREVIEW_PICTURE"]["TITLE"]?>">
				</div>
				<p><?=$arElement["NAME"]?></p>
			</a>
		</div>
	<?endforeach;?>
	</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif?>
</div>
<?endif;?>