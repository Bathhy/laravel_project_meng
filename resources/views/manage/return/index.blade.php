<x-layout>
    <div class="w-full h-full overflow-auto">
        
        <div class="sticky top-0 z-10  p-2 pb-5 border-b bg-white  flex justify-between">
            <h1 >Return</h1>
            {{-- <a href="{{ route('retrun.create') }}" class="btn px-3 py-1 rounded">Create Borrowing</a> --}}
        </div>
        <ul class="m-0" >
            @foreach($returnmodel as $returnmodels)
            <li>
                <x-card href="{{ route('return.show',$returnmodels->id) }}">
                    <div class="flex  ">
                        <h3>{{ $returnmodels->borrow->member->name}}</h3>
                    </div>
                </x-card>
            </li> 
            @endforeach
        </ul>

    </div>
</x-layout>