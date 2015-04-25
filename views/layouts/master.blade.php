<!DOCTYPE html>
<html>
    <head>
        <title>{{$page->title}}</title>        
        <link rel="stylesheet" href="/bower_components/uikit/css/uikit.gradient.min.css" />
    </head>
    <body class="bagraund">
        
        <div class="uk-container uk-container-center">
            
            <nav class="uk-navbar">
                
                @if (isset($menu[0]))
                @include('eva::helper.ul.menu', ['item'=>$menu[0]])
                @else
                <ul class="uk-navbar-nav"></ul>
                @endif

            </nav>

            <div class="uk-grid">
                <div class="uk-width-2-10">
                    @if (isset($menu[1]))
                    @include('eva::helper.ul.menu', ['item'=>$menu[1],'ul_class'=>'uk-nav uk-nav-side'])
                    @else
                    <ul class="uk-nav"></ul>
                    @endif
                </div>

                <div class="uk-width-8-10">
                    @section('content')
                    <p>ПУСТО</p>
                    @show
                </div>
            </div>
            
        </div>
    </body>
</html>




                                             
                        
                        


