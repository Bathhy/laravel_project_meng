<x-layout>
    <div class="w-full h-full overflow-auto">
        
        <div class="sticky top-0 z-10  p-2 pb-5 border-b bg-white  flex justify-between">
            <h1 >Category</h1>
            <a href="{{ route('category.create') }}" class="btn px-3 py-1 rounded">Create</a>
        </div>
        <ul class="m-0">
            @foreach($category as $categories)
            <li>
                <x-card href="{{ route('category.show', $categories->id) }}">
                    <div>
                        <h3>{{ $categories->name }}</h3>
                    </div>
                </x-card>
            </li> 
            @endforeach
        </ul>

    </div>
</x-layout>