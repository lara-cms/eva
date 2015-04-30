<!DOCTYPE html>
<html>
    <head>
        
        <title>{{$page->title}}</title> 
        <meta name="description" content="{{$page->description}}">
  

        <link rel="stylesheet" href="/bower_components/uikit/css/uikit.almost-flat.min.css" />

        <link rel="stylesheet" href="/css/app.css" />

        <script src="/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/bower_components/uikit/js/uikit.min.js"></script>
        
        <script src="/bower_components/uikit/js/components/grid.js"></script>

    </head>
    <body class="bagraund">
        
        <div class="uk-container uk-container-center">
            
            <nav class="uk-navbar uk-margin-bottom">
                
                @if (isset($menu[0]))
                @include('eva::helper.ul.menu', ['item'=>$menu[0]])
                @else
                <ul class="uk-navbar-nav"></ul>
                @endif

            </nav>

            <div class="uk-grid">
                <div class="uk-width-medium-2-10">
                    @if (isset($menu[1]))
                    @include('eva::helper.ul.menu', ['item'=>$menu[1],'ul_class'=>'uk-nav uk-nav-side'])
                    @else
                    <ul class="uk-nav"></ul>
                    @endif

                    <hr class="uk-grid-divider">

                    <p class="uk-h2">Каталог:</p>

                    @include('eva::snippet.catalog')  

                </div>

                <div class="uk-width-medium-8-10">
                    @section('content')
                        {!!$page->content!!}
                    @show
                </div>

            </div>
            
        </div>

        <div class="uk-block uk-block-footer">
            <div class="uk-container uk-container-center">

                <hr class="uk-article-divider">

                <div class="uk-grid">

                    <div class="uk-width-medium-3-10">
                        <h4>Меню навигации</h4>
                        @if (isset($menu[0]))
                        @include('eva::helper.ul.menu', ['item'=>$menu[0],'ul_class'=>'uk-list uk-contrast'])
                        @else
                        <ul class="uk-navbar-nav"></ul>
                        @endif
                    </div>

                    <div class="uk-width-medium-7-10">Подвал сюда можно разместить ценную информацию например адрес фирмы</div>

                </div>

                <div class="uk-grid">

                    <div class="uk-width-medium-1-1 uk-text-center uk-margin-bottom">
                        <p class="uk-margin-remove"><a href="http://digital-code.ru">Разработанно в | Digital-code.ru</a></p>
                        <span>Мы на рынке 2006 - 2015</span>
                    </div>

                </div>

            </div>
        </div>

    </body>
</html>




                                             
                        
                        


