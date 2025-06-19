<div @class(['card'])>
    {{$slot}}
    <a href="{{$attributes->get('href')}}" class="btn">view Detail</a>
</div>