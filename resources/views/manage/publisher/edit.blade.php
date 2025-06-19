<x-layout>
    <div class=" flex flex-col items-center justify-start p-10">
        <form action="{{route('publisher.update',$publisher->id)}}" method="POST" class="mt-10">
            @csrf
            @method('PUT')
            <h2>Update Publisher</h2>
            <label for="name" class=" mt-5">Publisher Name:</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{$publisher->name}}"
                required
                class=" inputbox"
            ><br><br>
            <label for="adress">Publisher Adress:</label>
            <input 
                type="text" 
                id="adress" 
                name="adress" 
                value="{{$publisher->adress}}"
                required
                class=" inputbox"
            ><br><br>

            <label for="phone_number">Publisher Phone number:</label>
            <input 
                type="tel" 
                id="phone_number" 
                name="phone_number"
                value="{{$publisher->phone_number}}"
                class=" inputbox"
                required
            ><br>

            <button type="submit" class="btn mt-9">Update Publisher</button>
            <button type="button" class="btn ml-2" onclick="window.location='{{route('publisher.show',$publisher ->id)}}'">Cancel</button>
        </form>
    </div>
</x-layout>