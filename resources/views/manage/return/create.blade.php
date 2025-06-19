<x-layout>
    <div class=" flex flex-col items-center justify-start p-10">
    <form action="{{route('book.store')}}" method="POST"  enctype="multipart/form-data" class="mt-10">
        @csrf
        <h2>Create a New Returning</h2>

        <label for="publisher_id">Name:</label>
        <select id="publisher_id" name="publisher_id" required>
            <option value="" disabled selected>Select a Publisher</option>
            @foreach($publisher as $publishers)
                <option value="{{$publishers->id}}" {{$publishers->id==old('publisher_id')?'selected':''}}>
                    {{$publishers->name}}
                </option>
            @endforeach
        </select><br><br>

        <label for="category_id">Book:</label>
        <select id="category_id" name="category_id" required>
            <option value="" disabled selected>Select a Category</option>
            @foreach($category as $categories)
                <option value="{{$categories->id}}" {{$categories->id==old('category_id')?'selected':''}}>
                    {{$categories->name}}
                </option>
            @endforeach
        </select><br><br>
        <label for="category_id">Borrowing:</label>
        <select id="category_id" name="category_id" required>
            <option value="" disabled selected>Select a Category</option>
            @foreach($category as $categories)
                <option value="{{$categories->id}}" {{$categories->id==old('category_id')?'selected':''}}>
                    {{$categories->name}}
                </option>
            @endforeach
        </select><br><br>
        <label for="quantity">Returning:</label>
        <input 
            type="number" 
            id="quantity" 
            name="quantity" 
            value="{{old('quantity')}}"
            required
             class=" border border-black h-10 rounded p-[5px]"
        ><br><br>
        <button type="submit" class="btn mt-4">Create Returning</button>
    
    </form>
    </div>
</x-layout>