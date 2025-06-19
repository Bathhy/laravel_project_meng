<x-layout>
    <div class=" flex flex-col items-center justify-start p-10">
        <form action="{{route('author.update',$author->id)}}" method="POST" class="mt-10">
            @csrf
            @method('PUT')
            <h2>Update Author</h2>
            <label for="name" class=" mt-5">Author Name:</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{$author->name}}"
                required
                class=" inputbox"
            ><br><br>
            <label for="adress">Author Adress:</label>
            <input 
                type="text" 
                id="adress" 
                name="adress" 
                value="{{$author->adress}}"
                required
                class=" inputbox"
            ><br><br>

            <label for="phone_number">Author Phone number:</label>
            <input 
                type="tel" 
                id="phone_number" 
                name="phone_number"
                value="{{$author->phone_number}}"
                class=" inputbox"
                required
            ><br>

            <button type="submit" class="btn mt-9">Update Category</button>
            <button type="button" class="btn ml-2" onclick="window.location='{{route('author.show',$author ->id)}}'">Cancel</button>
        </form>
    </div>
</x-layout>