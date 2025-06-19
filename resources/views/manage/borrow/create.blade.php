<x-layout>
    <div class=" flex flex-col items-center justify-start p-10">
    <form action="{{route('borrow.store')}}" method="POST"  class="mt-10">
        @csrf
        <h2>Create a New Book</h2>
        <label for="member_id">Member:</label>
        <select id="member_id" name="member_id" class="inputbox" required>
            <option value="" disabled selected>Select a member</option>
            @foreach($member as $members)
                <option value="{{$members->id}}" {{$members->id==old('member_id')?'selected':''}}>
                    {{$members->name}}
                </option>
            @endforeach
        </select><br><br>

        <label for="book_id">Book:</label>
        <select id="book_id" name="book_id" class="inputbox" required>
            <option value="" disabled selected>Select a Book</option>
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
            value="{{old('borrow_date')}}"
            required
             class=" inputbox"
             
        ><br><br>
        <label for="due_date">Book due_date:</label>
        <input 
            type="date" 
            id="due_date" 
            name="due_date" 
            value="{{old('due_date')}}"
            required
             class=" inputbox"
             
        ><br><br>
        
        <button type="submit" class="btn mt-4">Create Borrow</button>
        <button type="button" class="btn ml-2" onclick="window.location='{{ route('borrow.index') }}'">Cancel</button>
    </form>
    </div>
</x-layout>