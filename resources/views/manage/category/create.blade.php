<x-layout >
    
    <div class=" flex flex-col items-center justify-start p-10">
        <h1>
            Create category
        </h1>
        <form action="{{route('category.store')}}" method="POST" class="mt-10">
            @csrf
            <!-- ninja Name -->
            <label for="name" class=" mt-5">Category Name:</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{old('name')}}"
                required
                class=" inputbox"
            ><br>

            <button type="submit" class="btn mt-9">Create Category</button>
            <button type="button" class="btn ml-2" onclick="window.location='{{ route('category.index') }}'">Cancel</button>
        </form>
    </div>
</x-layout>