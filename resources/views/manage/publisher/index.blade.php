<x-layout>
    <div class="w-full h-full overflow-auto">
        
        <div class="sticky top-0 z-10  p-2 pb-5 border-b bg-white  flex justify-between">
            <h1 >Publisher</h1>
            <a href="{{route('publisher.create')}}" class="btn px-3 py-1 rounded">Create</a>
        </div>
        <ul class="m-0">
            @foreach($publisher as $publishers)
            <li>
                <x-card href="{{route('publisher.show',$publishers ->id)}}">
                    <div>
                        <h3>{{ $publishers->name }}</h3>
                    </div>
                </x-card>
            </li> 
            @endforeach
        </ul>

    </div>
</x-layout>