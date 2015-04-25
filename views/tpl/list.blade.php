@extends('eva::layouts.master')

@section('content')
    <h1>{{$page->title}}</h1>
    @if (isset($list))
    
        @foreach($list as $val)
            <article class="uk-comment">
            <header class="uk-comment-header">
                <img class="uk-comment-avatar" src="" alt="">
                <h4 class="uk-comment-title">{{$val['title']}}</h4>
                <div class="uk-comment-meta"><a href="/{{$val['url']}}">подробнее...</a></div>
            </header>
            <div class="uk-comment-body">
                {{$val['description']}}
            </div>
        </article>
        @endforeach
        
        @if (sizeof($list_pagin)>1)
        <ul class="uk-pagination">
            @foreach($list_pagin as $val)
                <li @if ($val['active']) class="uk-active" @endif >
                    @if ($val['active'])
                    <span>{{$val['number']}}</span>
                    @else
                    <a href="{{$val['url']}}">{{$val['number']}}</a>
                    @endif
                </li>
            @endforeach
        </ul>
        @endif
        
    @endif
@stop
