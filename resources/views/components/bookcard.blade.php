<div @class(['book'])>
    
    <a href="{{$attributes->get('href')}}" class="">
        {{$slot}}
    </a>
    
</div>