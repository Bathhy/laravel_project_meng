<x-layout>
    <div class=" flex flex-col items-center justify-start p-10">
    <form action="{{route('publisher.store')}}" method="POST" class="mt-10">
        @csrf
        <h2>Create a New Publisher</h2>
        <label for="name">Publisher Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{old('name')}}"
            required
             class=" inputbox"
        ><br><br>

        <label for="adress">Publisher Adress:</label>
        <input 
            type="text" 
            id="adress" 
            name="adress" 
            value="{{old('adress')}}"
            required
             class=" inputbox"
        ><br><br>

        <label for="phone_number">Publisher Phone number:</label>
        <input 
            type="tel" 
            id="phone_number" 
            name="phone_number"
             value="{{old('phone_number')}}"
             class=" inputbox"
            required
        ><br>

        <button type="submit" class="btn mt-4">Create Publisher</button>
        <button type="button" class="btn ml-2" onclick="window.location='{{ route('publisher.index') }}'">Cancel</button>

        {{-- <a href="{{route('publisher.index')}}" class="btn">Cancel</a> --}}
    </form>
    </div>
</x-layout>