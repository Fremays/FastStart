<?php
/**
 * Created by PhpStorm
 * User: Sergey Pokoev
 * www.pokoev.ru
 * @ Покоев Сергей 2016
 *
 * файл .parameters.php
 */

$arTemplateParameters = array(
    'CATALOG_WIDTH' => array(
        'PARENT' => 'VISUAL',
        'NAME' => GetMessage('CATALOG_WIDTH'),
        'TYPE' => 'STRING',
        'DEFAULT' => '288'
    ),
    'CATALOG_HEIGHT' => array(
        'PARENT' => 'VISUAL',
        'NAME' => GetMessage('CATALOG_HEIGHT'),
        'TYPE' => 'STRING',
        'DEFAULT' => '288'
    ),
);
?>
