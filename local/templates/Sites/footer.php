<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
    </div>
<?if(ERROR_404=='Y'):?>
    </div>
<?else:?>
<div class="sticky-push"></div>
<?endif;?>
</div>

<</foot>
    <div class="sticky-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <address>
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/address.php",
                            array(),
                            array(
                                "MODE" => "text"
                            )
                        )?>
                    </address>
                </div>

                <div class="col-md-4 col-md-push-4">
                    <div class="copyright">
                        Данный шаблон предоставлен компанией<br/>© <a href="http://www.intervolga.ru">ИНТЕРВОЛГА</a> для
                        Академии 1С-Битрикс
                    </div>
                </div>

                <div class="col-md-4 col-md-pull-4 hidden-print">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/social-links.php",
                        array(),
                        array(
                            "MODE" => "text"
                        )
                    )?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?
//<!--/ОБЯЗАТЕЛЬНО ПОДКЛЮЧИТЕ ЭТИ СКРИПТЫ И СТИЛИ-->
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/main.js');
?>
</body>
</html>
