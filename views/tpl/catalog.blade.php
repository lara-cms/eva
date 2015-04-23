@extends('eva::layouts.master')

@section('content')
<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
    <div class="uk-grid">
        
        <div class="uk-width-8-10">
            <div id="content">
                {!!$page->content!!}
            </div>
        </div>
        
        <div class="uk-width-2-10">
            @if (isset($menu_lvl_3))
            <div class="uk-panel uk-panel-box">
                <ul class="uk-nav uk-nav-side">
                    @foreach($menu_lvl_3 as $menu)
                    <li
                        @if ($menu->active()) 
                        class="uk-active"         
                        @endif
                        >
                        <a href="{{$menu->makeUrl()}}">{{$menu->makeTitle()}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="uk-panel uk-panel-box uk-margin-small-top">

                <form class="uk-form" action="/mail" method="POST">
                    <legend>Оствьте заявку и<br />получите 5 клиентов<br />БЕСПЛАТНО</legend>
                    <div class="uk-form-row">
                        <input type="text" name="name" placeholder="Ваше имя" class="uk-form-danger">
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
@stop
