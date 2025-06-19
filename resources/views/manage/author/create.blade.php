<x-layout>
    <div class=" flex flex-col items-center justify-start p-10">
    <form action="{{route('author.store')}}" method="POST" class="mt-10">
        @csrf
        <h2>Create a New Author</h2>


        <label for="name">Author Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{old('name')}}"
            required
             class=" inputbox"
        ><br><br>

        <label for="adress">Author Adress:</label>
        <input 
            type="text" 
            id="adress" 
            name="adress" 
            value="{{old('adress')}}"
            required
             class=" inputbox"
        ><br><br>

        <label for="phone_number">Author Phone number:</label>
        <input 
            type="tel" 
            id="phone_number" 
            name="phone_number"
             value="{{old('phone_number')}}"
             class=" inputbox"
            required
        ><br>

        <button type="submit" class="btn mt-4">Create Author</button>
        <button type="button" class="btn ml-2" onclick="window.location='{{ route('author.index') }}'">Cancel</button>
    </form>
    </div>
</x-layout>
    
