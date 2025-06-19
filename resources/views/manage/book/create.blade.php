<x-layout>
    <div class=" flex flex-col items-center justify-start p-10">
    <form action="{{route('book.store')}}" method="POST"  enctype="multipart/form-data" class="mt-10">
        @csrf
        <h2 >Create a New Book</h2>
        <label for="title">Book Name:</label><br>
        <input 
            type="text" 
            id="title" 
            name="title" 
            value="{{old('title')}}"
            required
             class=" border border-black h-10 rounded p-[5px] w-full"
        ><br><br>
        <label for="author_id">Author:</label><br>
        <select id="author_id" name="author_id" class=" inputbox"  required>
            <option value="" disabled selected>Select a Author</option>
            @foreach($author as $authors)
                <option value="{{$authors->id}}" {{$authors->id==old('author_id')?'selected':''}}>
                    {{$authors->name}}
                </option>
            @endforeach
        </select><br><br>

        <label for="publisher_id">Publisher:</label><br>
        <select id="publisher_id" name="publisher_id" class=" inputbox" required>
            <option value="" disabled selected>Select a Publisher</option>
            @foreach($publisher as $publishers)
                <option value="{{$publishers->id}}" {{$publishers->id==old('publisher_id')?'selected':''}}>
                    {{$publishers->name}}
                </option>
            @endforeach
        </select><br><br>

        <label for="edition">Book edition:</label><br>
        <input 
            type="number" 
            id="edition" 
            name="edition" 
            value="{{old('edition')}}"
            required
             class=" border border-black h-10 rounded p-[5px] w-full"
             
        ><br><br>
        <label for="category_id">Category:</label><br>
        <select id="category_id" name="category_id" class=" inputbox" required>
            <option value="" disabled selected>Select a Category</option>
            @foreach($category as $categories)
                <option value="{{$categories->id}}" {{$categories->id==old('category_id')?'selected':''}}>
                    {{$categories->name}}
                </option>
            @endforeach
        </select><br><br>
        <label for="quantity">Book Quantity:</label><br>
        <input 
            type="number" 
            id="quantity" 
            name="quantity" 
            value="{{old('quantity')}}"
            required
             class=" border border-black h-10 rounded p-[5px] w-full"
        ><br><br>
        <label for="image">Uplaod file imgae:</label>
        <input type="file" name="image" >
        <br><br>
        <button type="submit" class="btn mt-4">Create Book</button>
        <button type="button" class="btn ml-2" onclick="window.location='{{ route('book.index') }}'">Cancel</button>
        
    </form>
    </div>
</x-layout>