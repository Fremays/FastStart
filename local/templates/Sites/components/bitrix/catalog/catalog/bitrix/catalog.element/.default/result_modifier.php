<?php
/**
 * Created by PhpStorm
 * User: Sergey Pokoev
 * www.pokoev.ru
 * @ Покоев Сергей 2016
 *
 * файл result_modifier.php
 */

$arFilter = array(
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "ACTIVE" => "Y",
        "ACTIVE_DATE" => "Y",
        "SECTION_GLOBAL_ACTIVE" => "Y",
        "SECTION_ID" => $arParams["SECTION_ID"],
        "SECTION_CODE" => $arParams["SECTION_CODE"]
    );

$arOrder = array(
    $arParams["OFFERS_SORT_FIELD"] => $arParams["OFFERS_SORT_ORDER"],
    $arParams["OFFERS_SORT_FIELD2"] => $arParams["OFFERS_SORT_ORDER2"],
);

$arNavStartParams = array(
    "nElementID" => $arResult["ID"],
    "nPageSize" => 1
);

$end = false;

$DBRes = CIBlockElement::GetList($arOrder, $arFilter, false, $arNavStartParams);
while ($res = $DBRes->GetNext())
{
    if($res["ID"] == $arResult["ID"])
    {
        $end = true;
    }
    elseif($end)
    {
        $arResult["CATALOG_RING"]["NEXT"] = $res;
    }
    else
    {
        $arResult["CATALOG_RING"]["PREV"] = $res;
    }
}