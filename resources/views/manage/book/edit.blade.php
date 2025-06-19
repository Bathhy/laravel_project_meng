<x-layout>
     <div class=" flex flex-col items-center justify-start p-10">
        
        <form action="{{route('book.update',$book->id)}}" method="POST" enctype="multipart/form-data" class="mt-10">
        @csrf
         @method('PUT')
        <h2>Upadete Book</h2>
        <label for="title">Book Name:</label>
        <input 
            type="text" 
            id="title" 
            name="title" 
            value="{{$book->title}}"
            required
             class=" inputbox"
        ><br><br>
        <label for="author_id">Author:</label>
        <select id="author_id" name="author_id" class="inputbox" required>
        @foreach($author as $authors)
            <option 
                value="{{$authors->id}}" 
                {{ (old('author_id', $book->author_id) == $authors->id) ? 'selected' : '' }}
            >
                {{$authors->name}}
            </option>
        @endforeach
        </select>
        <br><br>

        <label for="publisher_id">Publisher:</label>
        <select id="publisher_id" name="publisher_id" class="inputbox" required>
        @foreach($publisher as $publishers)
            <option 
                value="{{$publishers->id}}" 
                {{ (old('publisher_id', $book->publisher_id) == $publishers->id) ? 'selected' : '' }}
            >
                {{$publishers->name}}
            </option>
        @endforeach
        </select><br><br>

        <label for="edition">Book edition:</label>
        <input 
            type="number" 
            id="edition" 
            name="edition" 
            value="{{$book->edition}}"
            required
             class=" inputbox"
        ><br><br>
        <label for="category_id">Category:</label>
        <select id="category_id" name="category_id" class="inputbox" required>
        @foreach($category as $categories)
            <option 
                value="{{$categories->id}}" 
                {{ (old('category_id', $book->category_id) == $categories->id) ? 'selected' : '' }}
            >
                {{$categories->name}}
            </option>
        @endforeach
        </select>
        <br><br>

        <label for="quantity">Book Quantity:</label>
        <input 
            type="number" 
            id="quantity" 
            name="quantity" 
            value="{{$book->quantity}}"
            required
             class=" inputbox"
        ><br><br>
        <label for="image">Uplaod file imgae:</label>
        <input type="file" name="image" >
        <br><br>
        <button type="submit" class="btn mt-4">update Book</button>
        <button type="button" class="btn ml-2" onclick="window.location='{{route('book.show',$book ->id)}}'">Cancel</button>
    </form>
    </div>
</x-layout>