@extends('eva::layouts.master')


@section('content')
    <h1>{{$page->title}}</h1>
    <h3 style="margin-top: -16px;">марка: {{$page->menu->makeTitle()}}</h3>
    <img src="/{{$page->getField('image')}}">
    {!!$page->content!!}
@stop