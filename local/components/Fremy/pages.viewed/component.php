<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

use Bitrix\Main\Loader,
	Bitrix\Main,
	Bitrix\Iblock;

if(!Loader::includeModule("iblock"))
{
    ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
    return;
}

$arFilter = array(
    "IBLOCK_ID" => $arParams["IBLOCKS"],
    "PROPERTY_USER" => CUser::GetSessionHash()
);
$arOrder = array(
    "created" => "desc"
);

$arSelect = array(
    "NAME",
    "PROPERTY_URL"
);

$rsItems = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);
while($arItem = $rsItems -> GetNext())
{
    $arResult["ITEMS"][] = array(
        'TITLE' => $arItem["NAME"],
        'URL' => $arItem["PROPERTY_URL_VALUE"]
    );
}

	$this->includeComponentTemplate();