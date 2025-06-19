<x-layout>
    <div class="w-full h-full overflow-auto">
        
        <div class="sticky top-0 z-10  p-2 pb-5 border-b bg-white  flex justify-between">
            <h1 >Author</h1>
            <a href="{{ route('author.create') }}" class="btn px-3 py-1 rounded">Create author</a>
        </div>
        <ul class="m-0">
            @foreach($author as $authors)
            <li>
                <x-card href="{{route('author.show', $authors->id )}}">
                    <div class="flex  ">
                        <h3>{{ $authors->name }}</h3>
                    </div>
                </x-card>
            </li> 
            @endforeach
        </ul>

    </div>
</x-layout>