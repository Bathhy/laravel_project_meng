<x-layout>
    <h1>Author</h1>
   
  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">

    <h2>Id: {{$author->id}}</h2>
    <h3> Name: {{$author->name}}</h3>
    <h3>adress: {{$author->adress}}</h3>
    <h3>Phone Number: {{$author->phone_number}}</h3>
  </div>
  <div class="flex items-center gap-4">
    <button type="button" class="btn m-0" onclick="window.location='{{ route('author.edit', $author->id) }}'">Update</button>
    
    <form action="{{ route('author.destroy', $author->id) }}" method="POST" class="m-0 p-0">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn m-0">Delete</button>
    </form>
    <button type="button" class="btn m-0" onclick="window.location='{{ route('author.index') }}'">Back</button>
</div>

  
</x-layout>