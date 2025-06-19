<x-layout>
    <h1>Return</h1>
   
  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">

    <h2>Name: {{$returnmodel->borrow->member->name}}</h2>
    <h2>book: {{$returnmodel->borrow->book->title}}</h2>
    <h2>Borrow: {{$returnmodel->borrow->borrow_date}}</h2>
    <h2>Return: {{$returnmodel->return_date}}</h2>
  </div>
  {{-- <a href="{{route('return.edit',$book->id)}} "  class="btn ">Update</a> --}}
  {{-- <form action="{{route('book.destroy',$book->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn my-4">Delect</button>
  </form> --}}
</x-layout>