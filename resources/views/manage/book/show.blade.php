<x-layout>
    <h1>Book</h1>
   
  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">

    <h2>Id: {{$book->id}}</h2>
    <h3>title: {{$book->title}}</h3>
    <h3>edition: {{$book->edition}}</h3>
    <h3>quantity: {{$book->quantity}}</h3>
    <h3>category: {{$book->category->name}}</h3>
    <h3>Author: {{$book->author->name}}</h3>
    <h3>Publisher: {{$book->publisher->name}}</h3>
    <img src="{{asset($book->image)}}" alt="" class="w-[70px] h-[70px]">
  </div>
  <div class=" flex items-center gap-4 ">
    <button type="button" class="btn m-0" onclick="window.location='{{ route('book.edit', $book->id) }}'">Update</button>
    <form action="{{route('book.destroy',$book->id)}}" method="POST" class="m-0 p-0">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn m-0">Delect</button>
  </form>
  <button type="button" class="btn m-0" onclick="window.location='{{ route('book.index') }}'">Back</button>
  </div>
  
</x-layout>