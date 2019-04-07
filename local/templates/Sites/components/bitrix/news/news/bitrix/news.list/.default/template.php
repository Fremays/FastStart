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
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
    <div class="live-list-detail">
        <div class="row">

        <?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="live-list-item" id="live-<?=$arItem['ID']?>">
                    <div class="live-item-body image">
                        <a class="live-item-img" href="<?=$arItem['DETAIL_PAGE_URL']?>">
                            <img src="<?=$arItem['FIELDS']['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['FIELDS']['PREVIEW_PICTURE']['ALT   ']?>"/>
                        </a>

                        <div class="live-item-body-over">
                            <div class="live-item-description">
                                <div class="description"><?=$arItem['PREVIEW_TEXT']?>
                                </div>
                            </div>
                            <div class="live-item-label">
                                <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
                            </div>
                            <span class="live-item-data"><?=$arItem['ACTIVE_FROM']?></span>
                        </div>
                    </div>
                </div>
<!--	<p class="news-item" id="--><?//=$this->GetEditAreaId($arItem['ID']);?><!--">-->
                    <!--		--><?//if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                    <!--			--><?//if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <!--				<a href="--><?//=$arItem["DETAIL_PAGE_URL"]?><!--"><img-->
                    <!--						class="preview_picture"-->
                    <!--						border="0"-->
                    <!--						src="--><?//=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
                    <!--						width="--><?//=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
                    <!--						height="--><?//=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
                    <!--						alt="--><?//=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
                    <!--						title="--><?//=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
                    <!--						style="float:left"-->
                    <!--						/></a>-->
                    <!--			--><?//else:?>
                    <!--				<img-->
                    <!--					class="preview_picture"-->
                    <!--					border="0"-->
                    <!--					src="--><?//=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
                    <!--					width="--><?//=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
                    <!--					height="--><?//=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
                    <!--					alt="--><?//=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
                    <!--					title="--><?//=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
                    <!--					style="float:left"-->
                    <!--					/>-->
                    <!--			--><?//endif;?>
                    <!--		--><?//endif?>
                    <!--		--><?//if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                    <!--			<span class="news-date-time">--><?//echo $arItem["DISPLAY_ACTIVE_FROM"]?><!--</span>-->
                    <!--		--><?//endif?>
                    <!--		--><?//if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                    <!--			--><?//if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <!--				<a href="--><?//echo $arItem["DETAIL_PAGE_URL"]?><!--"><b>--><?//echo $arItem["NAME"]?><!--</b></a><br />-->
                    <!--			--><?//else:?>
                    <!--				<b>--><?//echo $arItem["NAME"]?><!--</b><br />-->
                    <!--			--><?//endif;?>
                    <!--		--><?//endif;?>
                    <!--		--><?//if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                    <!--			--><?//echo $arItem["PREVIEW_TEXT"];?>
                    <!--		--><?//endif;?>
                    <!--		--><?//if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                    <!--			<div style="clear:both"></div>-->
                    <!--		--><?//endif?>
                    <!--		--><?//foreach($arItem["FIELDS"] as $code=>$value):?>
                    <!--			<small>-->
                    <!--			--><?//=GetMessage("IBLOCK_FIELD_".$code)?><!--:&nbsp;--><?//=$value;?>
                    <!--			</small><br />-->
                    <!--		--><?//endforeach;?>
                    <!--		--><?//foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                    <!--			<small>-->
                    <!--			--><?//=$arProperty["NAME"]?><!--:&nbsp;-->
                    <!--			--><?//if(is_array($arProperty["DISPLAY_VALUE"])):?>
                    <!--				--><?//=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
                    <!--			--><?//else:?>
                    <!--				--><?//=$arProperty["DISPLAY_VALUE"];?>
                    <!--			--><?//endif?>
                    <!--			</small><br />-->
                    <!--		--><?//endforeach;?>
                    <!--	</p>-->
            </div>
<?endforeach;?>

    </div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
</div>
<!--*****************************************************************-->

<!--    <div class="text-center">-->
<!--        <ul class="pagination">-->
<!--            <li class="disabled">-->
<!--                <a href="#"><i class="fa fa-angle-double-left"></i></a>-->
<!--            </li>-->
<!--            <li class="disabled">-->
<!--                <a href="#"><i class="fa fa-angle-left"></i></a>-->
<!--            </li>-->
<!--            <li class="active"><a href="#">1</a></li>-->
<!--            <li><a href="#">2</a></li>-->
<!--            <li><a href="#">3</a></li>-->
<!--            <li><a href="#">4</a></li>-->
<!--            <li><a href="#">5</a></li>-->
<!--            <li>-->
<!--                <a rel="next" href="#"><i class="fa fa-angle-right"></i></a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#"><i class="fa fa-angle-double-right"></i></a>-->
<!--            </li>-->
<!--            <li class="btn-all">-->
<!--                <a href="#">Все</a>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->

