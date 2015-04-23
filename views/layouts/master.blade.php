<!DOCTYPE html>
<html>
    <head>
        <title>{{$page->title}}</title>        
        
        <link rel="stylesheet" href="/bower_components/uikit/css/uikit.gradient.min.css" />
        <link rel="stylesheet" href="/bower_components/uikit/css/components/slideshow.min.css" />
        <link rel="stylesheet" href="/bower_components/uikit/css/components/slidenav.min.css" />
        <link rel="stylesheet" href="/bower_components/uikit/css/components/dotnav.min.css" />
        <link rel="stylesheet" href="/css/frostfactory.css" />
    </head>
    <body class="bagraund">
        
        <div id="header">
            <a href="/">
                <img src="/img/logo.png">
            </a>
        </div>
        
        <div class="shadowtop"></div>
        
        <div class="shadow">
            <div class="container">
                <div class="menu">
                    
                    @if (isset($menu[0]))
                    <ul>
                        @foreach($menu[0] as $val)
                            @if ($val['active'])
                            <li>
                                <a @if ($val['menu_active']) 
                                    class="active"         
                                @endif
                                href="{{$val['make_url']}}">{{$val['make_title']}}</a>
                            </li>  
                            @endif
                        @endforeach
                    </ul>
                    @endif
                    
                </div>
                
                <div class="inner">
                    <div class="uk-grid">
                        <div class="uk-width-2-10">
                            <div class="sidebar">

                                @if (isset($menu[1]))
                                <ul class="ul">
                                    @foreach($menu[1] as $val)
                                        @if ($val['active'])
                                        <li>
                                            <a @if ($val['menu_active']) 
                                                class="active"         
                                            @endif
                                            href="{{$val['make_url']}}">{{$val['make_title']}}</a>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @endif

                                @if (isset($menu[2]))
                                <ul style="padding-left: 20px;" class="ul">
                                    @foreach($menu[2] as $val)
                                        @if ($val['active'])
                                        <li>
                                            <a @if ($val['menu_active']) 
                                                class="active"         
                                            @endif
                                            href="{{$val['make_url']}}">{{$val['make_title']}}</a>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @endif

                                <style>
    div.YMaps {
      border: 1px solid #BBB;
      width: 175px;
      height: 300px;
      margin-left: 15px;
    }
</style>

<h3 style="  text-align: center;
                          color: #00768E;
                          padding: 5px;
                          margin-bottom: 7px;
                          border-bottom: solid 1px #BBBBBB;
                          border-top: solid 1px #BBBBBB;
                          margin-left: 13px;
                          margin-right: 5px;">Работаем<br>во всех районах</h3>
<div id="map2" class="YMaps"></div>
   




<form class="uk-form" style="margin-left:10px;  margin-bottom: 70px;text-align:center" action="/spasibo?_token=v0Yy2MomhRDHHJFLHDIVZXARPHdDCsPCAHAnGJnx" method="post">
    <fieldset>
        <h3 style="  font-size: 25px;
                                          line-height: 23px;
                                          text-align: center;
                                          padding-top: 14px;
                                          color: #C80000;">
            Закажите<br>обратный<br>звонок
        </h3>
        <div class="uk-form-row">
            <input name="name" style="  border: solid 1px #FF4949;" type="text" placeholder="Ваше имя">
        </div>
        <div class="uk-form-row">
            <input name="telefon" style="  border: solid 1px #FF4949;" type="text" placeholder="Ваш телефон" required=""> 
        </div>
        <input style="  margin-top: 12px;  width: 100%;" type="submit" class="uk-button uk-button-success" value="Заказать">

    </fieldset>
</form>

                            </div>
                        </div>
                        
                        <div class="uk-width-8-10">
                            <div class="content">
                                @section('content')
                                {!!$page->content!!}
                                @show
                            </div>
                        </div>
                        
                                
                </div>  
                </div>
            </div>
        </div>
        
        <div class="nav_up" id="nav_up"></div>
        <div class="back-bottom"><!--shadow top--> </div>
        
        <script src="/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/bower_components/uikit/js/uikit.min.js"></script>
        <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

        
                <script>
                                jQuery(function() {
                                var $elem = jQuery('#content');
				
                                jQuery('#nav_up').fadeIn('slow');

				
                                jQuery(window).bind('scrollstart', function(){
                                        jQuery('#nav_up').stop().animate({'opacity':'0.2'});
                                });
                                jQuery(window).bind('scrollstop', function(){
                                        jQuery('#nav_up').stop().animate({'opacity':'1'});
                                });
				

                                jQuery('#nav_up').click(
                                        function (e) {
                                                jQuery('html, body').animate({scrollTop: '0px'}, 800);
                                        }
                                );
            });
        </script>
        
        
        
        

        
                <script>
                                jQuery(function() {
                                var $elem = jQuery('#content');
				
                                jQuery('#nav_up').fadeIn('slow');

				
                                jQuery(window).bind('scrollstart', function(){
                                        jQuery('#nav_up').stop().animate({'opacity':'0.2'});
                                });
                                jQuery(window).bind('scrollstop', function(){
                                        jQuery('#nav_up').stop().animate({'opacity':'1'});
                                });
				

                                jQuery('#nav_up').click(
                                        function (e) {
                                                jQuery('html, body').animate({scrollTop: '0px'}, 800);
                                        }
                                );
            });
        </script>
        

<script type="text/javascript">//<![CDATA[
    ymaps.ready(init);
    var Map, mapPlacemark;

    function init(){     
        Map = new ymaps.Map("map2", {
            center: [59.94207396, 30.23172740],
            zoom: 9,
            controls: ['zoomControl']
        });
        Map.behaviors.disable('multiTouch');
        Map.behaviors.disable('scrollZoom');
        Map.behaviors.disable('drag');
        
        
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([60.09828104, 29.95947246], { 
        
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([60.01313775, 30.01028422], { 
           
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([59.99388134, 29.76583842], { 
           
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([59.91674311, 29.77819804], { 
            
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([59.88500912, 29.90454081], { 
           
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([59.85669883, 30.03500346], { 
         
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([60.08867912, 30.24099711], { 
           
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([60.02516730, 30.24443034], { 
             
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([60.00798088, 30.39823894], { 
           
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([59.96463134, 30.30107860], { 
           
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([59.91605356, 30.29764537], { 
          
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([59.93656140, 30.36287669], { 
           
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([59.87879673, 30.25781993], { 
            
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([59.85169022, 30.40304545], { 
            
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([59.89760287, 30.44630412], { 
         
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
        /*---------------------------------------------*/
        mapPlacemark = new ymaps.Placemark([59.83130258, 30.32202128], { 
          
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        });
        Map.geoObjects.add(mapPlacemark);
       
    }
//]]</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
var yaParams = {/*Здесь параметры визита*/};
</script>

<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter27212945 = new Ya.Metrika({id:27212945,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    trackHash:true,params:window.yaParams||{ }});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/27212945" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

        
        
    </body>
</html>




                                             
                        
                        


