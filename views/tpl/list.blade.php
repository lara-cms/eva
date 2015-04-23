@extends('eva::layouts.master')

@section('content')
    <h1>{{$page->title}}</h1>
    @if (isset($list))
    <ul class="ul">
        @foreach($list as $val)
        @if ($val['active'])
        <li>
            <a href="{{$val['url']}}">{{$val['title']}}</a>
        </li>
        @endif
        @endforeach
    </ul>
    @endif
    
@stop
