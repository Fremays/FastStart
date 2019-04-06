<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog.php");

$bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;
?>
<!DOCTYPE html>
<!--[if lt IE 8]>     <html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]>  <html class="no-js"><![endif]-->
<head>
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>

    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/common-styles.css');?>
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/ico/favicon_bx.png">

    <!--[if lt IE 9]>-->
    <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/vendor/modernizr-html5shiv-respond.min.js')?>"></script>
<!--    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/vendor/modernizr.min.js')?>"></script>
    <!--<![endif]-->
</head>
<body>
<!--[if lt IE 8]>
<p class="chromeframe">Вы используете <strong>устаревший </strong> браузер. Пожалуйста <a href="http://browsehappy.com/">
    обновите свой браузер</a> или <a href="http://www.google.com/chromeframe/?redirect=true">установите Google Chrome Frame</a> чтобы улучшить взаимодействие с сайтом.</p>
<![endif]-->
<?$APPLICATION->ShowPanel();?>
<div class="sticky-wrap">
    <header>
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <?if($bIsMainPage):?>
                        <span class="logo">
                        <?else:?>
                        <a class="logo" href="/">
                        <?endif;?>
                            <div class="image">Одежда</div>
                            <div id="slogan-rand" class="slogan"><noscript>Лучшая одежда</noscript></div>
                        <?if($bIsMainPage):?>
                            </span>
                        <?else:?>
                            </a>
                        <?endif;?>

                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-lg-7 col-xs-12 hidden-xs">
                                <ul class="btn-list-inline">
                                    <?$APPLICATION->IncludeFile(
                                        SITE_DIR."include/slogan.php",
                                        array(),
                                        array(
                                                "MODE" => "text"
                                        )
                                    )?>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-xs-12 hidden-print">
                                <div class="input-group-search">
                                    <input type="text" class="form-control" placeholder="Поиск...">
                                    <button class="btn btn-link" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <ul class="phone-list">
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/phone1.php",
                                    array(),
                                    array(
                                        "MODE" => "text"
                                    )
                                )?>
                                <li></li>
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/phone2.php",
                                    array(),
                                    array(
                                        "MODE" => "text"
                                    )
                                )?>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </header>
        <?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "1",	// Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
            "COMPONENT_TEMPLATE" => ".default"
        ),
            false
        );?>
    <?if($bIsMainPage):?>
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "index", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CHECK_DATES" => "N",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "DISPLAY_DATE" => "N",	// Выводить дату элемента
            "DISPLAY_NAME" => "Y",	// Выводить название элемента
            "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "FIELD_CODE" => array(	// Поля
                0 => "NAME",
                1 => "PREVIEW_TEXT",
                2 => "PREVIEW_PICTURE",
                3 => "",
            ),
            "FILTER_NAME" => "",	// Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "1",	// Код информационного блока
            "IBLOCK_TYPE" => "index",	// Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "50",	// Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
            "PAGER_TITLE" => "Новости",	// Название категорий
            "PARENT_SECTION" => "",	// ID раздела
            "PARENT_SECTION_CODE" => "",	// Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(	// Свойства
                0 => "url",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",	// Устанавливать статус 404
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "SHOW_404" => "N",	// Показ специальной страницы
            "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
            "SORT_BY2" => "TIMESTAMP_X",	// Поле для второй сортировки новостей
            "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
            "COMPONENT_TEMPLATE" => ".default"
        ),
            false
        );?>
        <div class="activities-description-wrap">
            <div class="activities-description">
                <div class="container">
                    <div class="activities-inner">
                        <h3>Последние посещенные вами страницы</h3>
                        <ul>
                            <li><a href="#">Мы стали использовать новую ткань</a></li>
                            <li><a href="#">Главная страница</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mbl">
            <div class="row">
                <div class="col-md-12">
                    <div class="live-main">
                        <h5><a href="#">Новости</a></h5>
                        <div class="live-pagination">
                            <a class="prev" href="#prev"><i class="fa fa-angle-left"></i></a>
                            <a class="next" href="#next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="live-list-wrap">
                            <div class="live-list">
                                <div class="live-list-item" id="live-1">
                                    <div class="live-item-body image">
                                        <a class="live-item-img" href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/live-list/img-1.jpg" alt=""/></a>
                                        <div class="live-item-body-over">
                                            <div class="live-item-description">
                                                <div class="description">Изобретение относится к области получения и применения...</div>
                                            </div>
                                            <div class="live-item-label">
                                                <i class="fa fa fa-twitter"></i>
                                                <a href="#">Новое веяние в одежде - получено прочное водостойкое соединение</a>
                                            </div>
                                            <span class="live-item-data">25 Декабря 2015</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="live-list-item" id="live-2">
                                    <div class="live-item-body image">
                                        <a class="live-item-img" href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/live-list/img-2.jpg" alt=""/></a>
                                        <div class="live-item-body-over">
                                            <div class="live-item-description">
                                                <div class="description">В следующем году состоится выставка одежды...</div>
                                            </div>
                                            <div class="live-item-label">
                                                <i class="fa fa fa-vk"></i>
                                                <a href="#">Международная выставка одежды Salon De Fashion</a>
                                            </div>
                                            <span class="live-item-data">22 Октября 2015</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="live-list-item" id="live-3">
                                    <div class="live-item-body">
                                        <div class="live-item-body-over">
                                            <div class="live-item-description">
                                                <div class="description">Для пошива нашей одежды мы стали использовать новую
                                                    инновационную ткань</div>
                                            </div>
                                            <div class="live-item-label">
                                                <a href="#">Мы стали использовать новую ткань</a>
                                            </div>
                                            <span class="live-item-data">2 Июня 2015</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="live-list-item" id="live-4">
                                    <div class="live-item-body">
                                        <div class="live-item-body-over">
                                            <div class="live-item-description">
                                                <div class="description">Мы расширяем свой размерный ряд. Теперь наша одежда будет
                                                    доступна большему количеству людей</div>
                                            </div>
                                            <div class="live-item-label">
                                                <a href="#">Размерный ряд</a>
                                            </div>
                                            <span class="live-item-data">30 Апреля 2015</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="live-list-item" id="live-5">
                                    <div class="live-item-body image">
                                        <a class="live-item-img" href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/live-list/img-3.jpg" alt=""/></a>
                                        <div class="live-item-body-over">
                                            <div class="live-item-description">
                                                <div class="description">С 20 по 23 февраля состоится...</div>
                                            </div>
                                            <div class="live-item-label">
                                                <i class="fa fa fa-twitter"></i>
                                                <a href="#">Форум производителей одежды в России</a>
                                            </div>
                                            <span class="live-item-data">22 Апреля 2014</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?endif;?>

    <?if(ERROR_404=='Y'):?>
    <div class="page-not-found">
    <?else:?>
    <div class="container">
        <?if(!$bIsMainPage):?>
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
                "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
            ),
                false
            );?>
        <?endif;?>
        <h1><?$APPLICATION->ShowTitle(false);?></h1>
    </div>
    <?endif;?>
    <div class="container">
