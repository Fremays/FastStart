<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

?>
<div class="mfeedback">

    <div class="container">
        <b>Адрес:</b> Москва, 2-я Хуторская ул., 38А</p>
        <iframe width="640" height="490" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.ru/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=%D0%B3.+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D1%83%D0%BB.+2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F,+%D0%B4.+38%D0%90&amp;aq=&amp;sll=55,103&amp;sspn=90.84699,270.527344&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F+%D1%83%D0%BB.,+38,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127287&amp;ll=55.805478,37.569551&amp;spn=0.023154,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        <br/>
        <small><a
                    href="https://maps.google.ru/maps?f=q&amp;source=embed&amp;hl=ru&amp;geocode=&amp;q=%D0%B3.+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D1%83%D0%BB.+2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F,+%D0%B4.+38%D0%90&amp;aq=&amp;sll=55,103&amp;sspn=90.84699,270.527344&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F+%D1%83%D0%BB.,+38,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127287&amp;ll=55.805478,37.569551&amp;spn=0.023154,0.054932&amp;z=14&amp;iwloc=A"
                    style="color:#0000FF;text-align:left">Просмотреть увеличенную карту</a></small>
<form action="<?=POST_FORM_ACTION_URI?>" class="form-horizontal form-style-dashed" method="POST">
    <?=bitrix_sessid_post()?>
    <h1>Задать вопрос:</h1>
    <?if(!empty($arResult["ERROR_MESSAGE"]))
    {
        foreach($arResult["ERROR_MESSAGE"] as $v)
            ShowError($v);
    }
    if(strlen($arResult["OK_MESSAGE"]) > 0)
    {
        ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
    }
    ?>
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <div class="form-group">
                <label for="input-6" class="col-sm-4 col-xs-12 control-label required"><?=GetMessage("MFT_NAME")?></label>

                <div class="col-sm-8">
                    <input id="input-6" name='user_name' type="text" class="form-control" placeholder="Иван Иванов" <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?>required<?endif?> value="<?=$arResult["AUTHOR_NAME"]?>">
                </div>
            </div>
            <div class="form-group">
                <label for="input-9" class="col-sm-4 col-xs-12 control-label required"><?=GetMessage("MFT_EMAIL")?></label>

                <div class="col-sm-8">
                    <input id="input-9" name="user_email"  type="email" class="form-control" placeholder="info@intervolga.ru" value="<?=$arResult["AUTHOR_EMAIL"]?>"
                    <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?>required<?endif?>>
                </div>
            </div>
            <div class="form-group">
                <label for="input-10" class="col-sm-4 col-xs-12 control-label"><?=GetMessage("MFT_MESSAGE")?></label>

                <div class="col-sm-8">
                    <textarea class="form-control" name="MESSAGE" rows="7" <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?>required<?endif?> id="input-10"><?=$arResult["MESSAGE"]?></textarea>
                </div>
            </div>
            <?if($arParams["USE_CAPTCHA"] == "Y"):?>
                <div class="form-group">
                    <label for="input-5" class="col-sm-4 col-xs-12 control-label required"><?=GetMessage("MFT_CAPTCHA")?></label>
                    <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">

                    <div class="col-sm-8 col-xs-12">
                        <div class="input-group-captcha">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="image">
                                        <img class="img-responsive" src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" alt="CAPTCHA"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control" name="captcha_word" type="text" placeholder="Код с картинки"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?endif?>
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-4">
<!--                    <input type="hidden" name="PARAMS_HASH" value="--><?//=$arResult["PARAMS_HASH"]?><!--">-->
<!--                    <button class="btn btn-primary" type="submit">--><?//=GetMessage("MFT_SUBMIT")?><!--</button>-->
                    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                    <input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<div class="sticky-push"></div>
</div>
<pre>
    <?print_r($arResult)?>
</pre>
