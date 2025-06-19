<x-layout>
    <div class="w-full h-full overflow-auto">
        
        <div class="sticky top-0 z-10  p-2 pb-5 border-b bg-white  flex justify-between">
            <h1 >Book</h1>
            <a href="{{ route('book.create') }}" class="btn px-3 py-1 rounded">Create Book</a>
        </div>
            <ul class="m-0 books-grid ">
                @foreach($book as $books)
                <li class="flex flex-col items-center justify-center text-center">
                    <x-bookcard href="{{route('book.show', $books->id )}}" >
                        <img class=" h-full" src="{{ asset($books->image) }}" alt="">
                        <h2>{{$books->title}}</h2>
                    </x-bookcard>
                </li> 
                @endforeach
            </ul>
        
    </div>
</x-layout>