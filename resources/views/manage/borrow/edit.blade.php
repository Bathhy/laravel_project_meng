<x-layout>
    <div class=" flex flex-col items-center justify-start p-10">
        <form action="{{route('borrow.update',$borrow->id)}}" method="POST" class="mt-10">
            @csrf
            @method('PUT')
        <h2>Update category</h2>

        <label for="member_id">Member:</label>
        <select id="member_id" name="member_id" class="inputbox" required>
            @foreach($member as $members)
                <option value="{{$members->id}}" {{$members->id==old('member_id')?'selected':''}}>
                    {{$members->name}}
                </option>
            @endforeach
        </select><br><br>

        <label for="book_id">Book:</label>
        <select id="book_id" name="book_id" class="inputbox" required>
            @foreach($book as $books)
                <option value="{{$books->id}}" {{$books->id==old('book_id')?'selected':''}}>
                    {{$books->title}}
                </option>
            @endforeach
        </select><br><br>

        <label for="borrow_date">Book borrow_date:</label>
        <input 
            type="date" 
            id="borrow_date" 
            name="borrow_date" 
            value="{{$borrow->borrow_date}}"
            required
             class=" inputbox"
             
        ><br><br>
        <label for="due_date">Book due_date:</label>
        <input 
            type="date" 
            id="due_date" 
            name="due_date" 
            value="{{$borrow->due_date}}"
            required
             class=" inputbox"
             
        ><br><br>

            <button type="submit" class="btn mt-9">Update Category</button>
            <button type="button" class="btn ml-2" onclick="window.location='{{route('borrow.show',$borrow ->id)}}'">Cancel</button>
            
        </form>
    </div>
</x-layout>