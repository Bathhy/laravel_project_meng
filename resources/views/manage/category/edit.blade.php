<x-layout >
    
    <div class=" flex flex-col items-center justify-start p-10">
        <form action="{{route('category.update',$category->id)}}" method="POST" class="mt-10">
            @csrf
            @method('PUT')
            <h2>Update category</h2>
            <label for="name" class=" mt-5">Category Name:</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{$category->name}}"
                required
                class=" inputbox"
            ><br>

            <button type="submit" class="btn mt-9">Update Category</button>
            <button type="button" class="btn ml-2" onclick="window.location='{{route('category.show',$category ->id)}}'">Cancel</button>
        </form>
    </div>
</x-layout>