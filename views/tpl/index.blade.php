@extends('eva::layouts.master')

@section('content')
<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
    <div class="uk-grid">
        <div class="uk-width-7-10">

            <div class="uk-slidenav-position" data-uk-slideshow="">
                <ul class="uk-slideshow uk-text-center" style="height: 232px;" data-uk-slideshow="{autoplay:true}">
                    <li aria-hidden="false" class="uk-active" style="-webkit-animation-duration: 500ms; height: 232px;">
                        <div class="uk-panel uk-panel-box">
                            <div class="uk-grid">
                                <div class="uk-width-1-3">
                                    <img style="height: 211px;" src="http://getuikit.com/docs/images/placeholder_200x100.svg" width="200" height="200" alt="">
                                </div>
                                <div class="uk-width-2-3">
                                    <p class="uk-panel-title">Продвижение сайтов с оплатой за позиции</p>
                                    <a href="/service/seo/oplatazarezultat" class="uk-button">Подробней...</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li aria-hidden="true" style="-webkit-animation-duration: 500ms; height: 232px;" class="">
                        <div class="uk-panel uk-panel-box uk-panel-box-primary">
                            <div class="uk-grid">
                                <div class="uk-width-2-3">
                                    <p class="uk-panel-title">Палатите только за целевых клиентов</p>
                                    <a href="/service/seo/oplatazarezultat" class="uk-button">Подробней...</a>
                                </div>
                                <div class="uk-width-1-3">
                                    <img style="height: 211px;" src="http://getuikit.com/docs/images/placeholder_200x100.svg" width="200" height="200" alt="">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
            </div>

        </div>

        <div class="uk-width-3-10">
            <div style="text-align: center" class="uk-panel uk-panel-box">

                <form class="uk-form" action="/mail" method="POST">
                    <legend>Бесплатный анализ сайта</legend>
                    <div class="uk-form-row">
                        <input type="text" name="name" placeholder="Ваше имя" class="uk-form-danger">
                    </div>
                    <div class="uk-form-row">
                        <input type="text" name="site" placeholder="Ваш сайт" class="uk-form-danger">
                    </div>
                    <div class="uk-form-row">
                        <input type="text" name="telefon" placeholder="Укажите ваш телефон" class="uk-form-danger">
                    </div>
                    <div class="uk-form-row">
                        <input style="  width: 100%;" type="submit" value="Заказать звонок" class="uk-button uk-button-success">
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>

<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
    <h2>Ближайшие мероприятия</h2>

    <ul class="uk-grid uk-grid-width-1-5">

        <li>
            <div class="uk-panel uk-panel-box">
                <p><strong>Мастер класс<br />продающие УТП</strong></p>
                <p>Повторение для тех кто не успел</p>
                <p>Март 20</p>
                <a href="#">подробней</a>
            </div>
        </li>

        <li>
            <div class="uk-panel uk-panel-box">
                <p><strong>Курсс<br />SEO верстка</strong></p>
                <p>3-х дневный курс</p>
                <p>Март 4</p>
                <a href="#">подробней</a>
            </div>
        </li>

        <li>
            <div class="uk-panel uk-panel-box">
                <p><strong>Вводная лекция<br />Эфективный лендинг</strong></p>
                <p>Ведут: Алексей Александрович и Еще Ктонибудь</p>
                <p>Март 11</p>
                <a href="#">подробней</a>
            </div>
        </li>

        <li>
            <div class="uk-panel uk-panel-box">
                <p><strong>Лекция<br />Анализ конкурентов</strong></p>
                <p>Семинар весь день</p>
                <p>Март 18</p>
                <a href="#">подробней</a>
            </div>
        </li>

        <li>
            <div class="uk-panel uk-panel-box">
                <p><strong>Мастер класс<br />продающие УТП</strong></p>
                <p>Видущий: Алексей Александрович и Еще Ктонибудь</p>
                <p>Март 25</p>
                <a href="#">подробней</a>
            </div>
        </li>

    </ul>
</div>


<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <h2 style="text-align: center">Онас в цифрах</h2>
            <div class="uk-slidenav-position" data-uk-slideshow="{autoplay:true,animation: 'scroll'}">
                <ul class="uk-slideshow uk-text-center" style="height: 232px;">

                    <li aria-hidden="false" class="uk-active" style="-webkit-animation-duration: 500ms; height: 232px;">

                        <div class="uk-panel uk-panel-box">
                            <div class="uk-grid">
                                <div class="uk-width-3-10">
                                    <img style="height: 211px;" src="http://getuikit.com/docs/images/placeholder_200x100.svg" width="200" height="200" alt="">
                                </div>
                                <div  class="uk-width-4-10">

                                    <p style="margin: 0px;" class="uk-panel-title">Ремонт квартир</p>


                                    <div class="uk-grid">
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-danger">ДО</div>
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-success">ПОСЛЕ</div>
                                    </div>


                                    <p style="margin: 0px;" class="uk-panel-title">создание сайта</p>

                                    <div class="uk-grid">
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-danger">67 000 руб</div>
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-success">0</div>
                                    </div>


                                    <p style="margin: 0px;" class="uk-panel-title">Рекламный бюджет</p>

                                    <div class="uk-grid">
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-danger">12 000 руб</div>
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-success">12 000 руб</div>
                                    </div>


                                    <p style="margin: 0px;" class="uk-panel-title">процент конверсии</p>

                                    <div class="uk-grid">
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-danger">3.7%</div>
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-success">14.2%</div>
                                    </div>


                                    <p style="margin: 0px;" class="uk-panel-title">количестиво заявок</p>

                                    <div class="uk-grid">
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-danger">3/день</div>
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-success">15/день</div>
                                    </div>


                                    <p style="margin: 0px;" class="uk-panel-title">стоимость заявки</p>

                                    <div class="uk-grid">
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-danger">4700 руб</div>
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-success">750 руб</div>
                                    </div>


                                    <a href="/service/seo/oplatazarezultat" class="uk-button">Подробней...</a>
                                </div>
                                <div class="uk-width-3-10">
                                    <img style="height: 211px;" src="http://getuikit.com/docs/images/placeholder_200x100.svg" width="200" height="200" alt="">
                                </div>
                            </div>
                        </div>

                    </li>

                    <li aria-hidden="true" style="-webkit-animation-duration: 500ms; height: 232px;" class="">

                        <div class="uk-panel uk-panel-box uk-panel-box-primary">
                            <div class="uk-grid">
                                <div class="uk-width-3-10">
                                    <img style="height: 211px;" src="http://getuikit.com/docs/images/placeholder_200x100.svg" width="200" height="200" alt="">
                                </div>
                                <div  class="uk-width-4-10">
                                    
                                    <p style="margin: 0px;" class="uk-panel-title">Продажа чупочупсов</p>


                                    <div class="uk-grid">
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-danger">ДО</div>
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-success">ПОСЛЕ</div>
                                    </div>


                                    <p style="margin: 0px;" class="uk-panel-title">создание сайта</p>

                                    <div class="uk-grid">
                                        <div style="text-align: center; margin: 0px;padding: 0px;r" class="uk-width-5-10 uk-alert uk-alert-danger">40 000 руб</div>
                                        <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-success">5 000</div>
                                            </div>

                                        <p style="margin: 0px;" class="uk-panel-title">Рекламный бюджет</p>

                                        <div class="uk-grid">
                                            <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-danger">25 000 руб</div>
                                            <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-success">25 000 руб</div>
                                        </div>


                                        <p style="margin: 0px;" class="uk-panel-title">процент конверсии</p>

                                        <div class="uk-grid">
                                            <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-danger">5.4%</div>
                                            <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-success">16.8%</div>
                                        </div>


                                        <p style="margin: 0px;" class="uk-panel-title">количестиво заявок</p>

                                        <div class="uk-grid">
                                            <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-danger">7/день</div>
                                            <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-success">27/день</div>
                                        </div>


                                        <p  style="margin: 0px;" class="uk-panel-title">стоимость заявки</p>

                                        <div class="uk-grid">
                                            <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-danger">3200 руб</div>
                                            <div style="text-align: center; margin: 0px;padding: 0px;" class="uk-width-5-10 uk-alert uk-alert-success">450 руб</div>
                                        </div>
   

                                        <a href="/service/seo/oplatazarezultat" class="uk-button">Подробней...</a>
                                    </div>
                                    <div class="uk-width-3-10">
                                        <img style="height: 211px;" src="http://getuikit.com/docs/images/placeholder_200x100.svg" width="200" height="200" alt="">
                                    </div>
                                </div>
                            </div>

                    </li>
                </ul>
                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
            </div>

        </div>
    </div>
</div>

<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <h2>Около 95% веб студий прадают: сайты, рекламные компании, логитипы и красивые картинки.</h2>
            <p>Тогда как вам нужен не сайт или красивые картинки а клиенты!</p>
            <div style="float: right; width: 126px;text-align: center;margin-right: 200px" class="uk-panel uk-panel-box">
                <p>
                    ТЕСТ-ДРАЙВ<br>
                    БЕСПЛАТНО!<br>
                    Попробуй
                </p>
            </div>
            
            <div style="clear: both"></div>
            
            <p>Уникальная многокональная система MAGNET 2.0<br>позволяет получить целевых клиентов из интернета<br>уже через 7 дней</p>
            
        </div>
    </div>
</div>

<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom uk-panel uk-panel-box">
    <div class="uk-grid">
        <div class="uk-width-1-1" style="text-align: center;">
            <h1>Факты</h1>
        </div>
    </div>
    <div class="uk-grid">
        <div class="uk-width-1-4" style="text-align: center;">
            <h2>244</h2>
            <p>заявки в день<br>с сайтов<br>наших клиентов</p>
        </div>
        <div class="uk-width-1-4" style="text-align: center;">
            <p>Выполнено более</p>
            <h2>100</h2>
            <p>проектов клиентов</p>
        </div>
        <div class="uk-width-1-4" style="text-align: center;">
            <p>Среднее увелечение<br>продажи клиентов</p>
            <h2>176%</h2>
        </div>
        <div class="uk-width-1-4" style="text-align: center;">
            <h2>5</h2>
            <p>заявок от<br>клиентов бесплатно</p>            
        </div>
    </div>
</div>            
@stop