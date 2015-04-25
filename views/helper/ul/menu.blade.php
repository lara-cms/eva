@if (isset($item))
<ul class="{{ $ul_class or 'uk-navbar-nav' }}">
    @foreach($item as $val)
    @if ($val['active'])
    <li @if ($val['menu_active']) class="uk-active" @endif>
         <a href="{{$val['make_url']}}">{{$val['make_title']}}</a>
    </li>  
    @endif
    
    @endforeach
</ul>
@endif